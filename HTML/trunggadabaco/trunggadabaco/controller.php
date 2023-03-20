<?php

function settings($dataSend)
	{
		global $modelOption;
		global $urlPlugins;
		global $isRequestPost;
		global $urlHomes;
		global $languageMantan;
		global $modelAlbum;
		global $themeSettings;

		if(checkAdminLogin()){
			$data= $modelOption->getOption('themeSettingsTham');
			$mess= '';
			$listAlbum = $modelAlbum->getNewAlbum(null,array());

			if($isRequestPost){

				$data['Option']['value']['logo']= (isset($dataSend['request']->data['logo']))? $dataSend['request']->data['logo']:'';
				$data['Option']['value']['headline1']= (isset($dataSend['request']->data['headline1']))? $dataSend['request']->data['headline1']:'';
				$data['Option']['value']['topcontent1']= (isset($dataSend['request']->data['topcontent1']))? $dataSend['request']->data['topcontent1']:'';
				$data['Option']['value']['headline2']= (isset($dataSend['request']->data['headline2']))? $dataSend['request']->data['headline2']:'';
				$data['Option']['value']['topcontent2']= (isset($dataSend['request']->data['topcontent2']))? $dataSend['request']->data['topcontent2']:'';
				$data['Option']['value']['headline3']= (isset($dataSend['request']->data['headline3']))? $dataSend['request']->data['headline3']:'';
				$data['Option']['value']['topcontent3']= (isset($dataSend['request']->data['topcontent3']))? $dataSend['request']->data['topcontent3']:'';
				$data['Option']['value']['headline4']= (isset($dataSend['request']->data['headline4']))? $dataSend['request']->data['headline4']:'';
				$data['Option']['value']['topcontent4']= (isset($dataSend['request']->data['topcontent4']))? $dataSend['request']->data['topcontent4']:'';
				$data['Option']['value']['abouttitle1']= (isset($dataSend['request']->data['abouttitle1']))? $dataSend['request']->data['abouttitle1']:'';
				$data['Option']['value']['aboutcontent1']= (isset($dataSend['request']->data['aboutcontent1']))? $dataSend['request']->data['aboutcontent1']:'';
				$data['Option']['value']['imgabout1']= (isset($dataSend['request']->data['imgabout1']))? $dataSend['request']->data['imgabout1']:'';
				$data['Option']['value']['abouttitle2']= (isset($dataSend['request']->data['abouttitle2']))? $dataSend['request']->data['abouttitle2']:'';
				$data['Option']['value']['aboutcontent2']= (isset($dataSend['request']->data['aboutcontent2']))? $dataSend['request']->data['aboutcontent2']:'';
				$data['Option']['value']['imgabout2']= (isset($dataSend['request']->data['imgabout2']))? $dataSend['request']->data['imgabout2']:'';
				$data['Option']['value']['abouttitle3']= (isset($dataSend['request']->data['abouttitle3']))? $dataSend['request']->data['abouttitle3']:'';
				$data['Option']['value']['aboutcontent3']= (isset($dataSend['request']->data['aboutcontent3']))? $dataSend['request']->data['aboutcontent3']:'';
				$data['Option']['value']['imgabout3']= (isset($dataSend['request']->data['imgabout3']))? $dataSend['request']->data['imgabout3']:'';
				$data['Option']['value']['abouttitle4']= (isset($dataSend['request']->data['abouttitle4']))? $dataSend['request']->data['abouttitle4']:'';
				$data['Option']['value']['aboutcontent4']= (isset($dataSend['request']->data['aboutcontent4']))? $dataSend['request']->data['aboutcontent4']:'';
				$data['Option']['value']['gioithieutrangchu']= (isset($dataSend['request']->data['gioithieutrangchu']))? $dataSend['request']->data['gioithieutrangchu']:'';
				$data['Option']['value']['imgabout4']= (isset($dataSend['request']->data['imgabout4']))? $dataSend['request']->data['imgabout4']:'';
				$data['Option']['value']['facebook']= (isset($dataSend['request']->data['facebook']))? $dataSend['request']->data['facebook']:'';
				$data['Option']['value']['textfooter']= (isset($dataSend['request']->data['textfooter']))? $dataSend['request']->data['textfooter']:'';


				
				$modelOption->saveOption('themeSettingsTham', $data['Option']['value']);
				$mess= 'lưu thành công';
			}

			setVariable('mess',$mess);
			setVariable('data',$data);
			
		}else{
			$modelOption->redirect($urlHomes);
		}
	}

	function editIndex($dataSend)
	{
		global $modelOption;
		global $isRequestPost;
		global $urlHomes;
		global $themeSettings;

		if(checkAdminLogin()){
			$data= $modelOption->getOption('themeSettingsTham');
			$mess= '';
			
			if($isRequestPost){
				if(!empty($dataSend['request']->data['nameItem'])){
					$data['Option']['value'][$dataSend['request']->data['nameItem']]= @$dataSend['request']->data['content'];
				}elseif(!empty($dataSend['request']->data['nameItemMeida'])){
					$data['Option']['value'][$dataSend['request']->data['nameItemMeida']]= @$dataSend['request']->data['contentMedia'];
				}elseif(!empty($dataSend['request']->data['nameItemEditer'])){
					$data['Option']['value'][$dataSend['request']->data['nameItemEditer']]= @$dataSend['request']->data['contentEditer'];
				}elseif(!empty($dataSend['request']->data['nameItemTextarea'])){
					$data['Option']['value'][$dataSend['request']->data['nameItemTextarea']]= @$dataSend['request']->data['contentTextarea'];
				}
				
				$modelOption->saveOption('themeSettingsTham', $data['Option']['value']);
				$mess= 'Lưu dữ liệu thành công';
			}

			$themeSettings= $data;
		}else{
			$modelOption->redirect($urlHomes);
		}
	}


function indexTheme($input)
{
	global $modelAlbum;
	global $modelNotice;
	global $themeData;

	if (function_exists('getListCategory')) {
		$listCategory = getListCategory();
	} else {
		$listCategory = array();
	}

	$listProduct= array();
	if(!empty($listCategory['Option']['value']['category'])){
		foreach($listCategory['Option']['value']['category'] as $category){
			$listProduct[$category['id']] = getListProduct($limit = 8, $condition = array('category'=>(int) $category['id']));
		}
	}

	$listAlbum= array();
	if(!empty($themeData['Option']['value']['doitactrangchu'])){
		$listAlbum = $modelAlbum->getAlbum($themeData['Option']['value']['doitactrangchu']);
	}

	$listNoticeNew= $modelNotice->getNewNotice(3);



	setVariable('listProduct', $listProduct);
	setVariable('listCategory', $listCategory);
	setVariable('listAlbum', $listAlbum);
	setVariable('listNoticeNew', $listNoticeNew);
	
}
?>