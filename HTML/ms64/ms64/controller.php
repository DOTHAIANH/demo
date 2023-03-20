<?php

function settings($dataSend)
	{
		global $modelOption;
		//global $urlPlugins;
		global $isRequestPost;
		global $urlHomes;
		//global $languageMantan;
		global $modelAlbum;
		global $themeSetting;

		if(checkAdminLogin()){
			$data= $modelOption->getOption('themeSettingsms64');
			$mess= '';
			$listAlbum = $modelAlbum->getNewAlbum(null,array());

			if($isRequestPost){
				//khối header
				$data['Option']['value']['logo1']= (isset($dataSend['request']->data['logo1']))? $dataSend['request']->data['logo1']:'';
				$data['Option']['value']['logo2']= (isset($dataSend['request']->data['logo2']))? $dataSend['request']->data['logo2']:'';
				$data['Option']['value']['logo3']= (isset($dataSend['request']->data['logo3']))? $dataSend['request']->data['logo3']:'';

				$data['Option']['value']['logo4']= (isset($dataSend['request']->data['logo4']))? $dataSend['request']->data['logo4']:'';
				$data['Option']['value']['logo5']= (isset($dataSend['request']->data['logo5']))? $dataSend['request']->data['logo5']:'';
				$data['Option']['value']['logo6']= (isset($dataSend['request']->data['logo6']))? $dataSend['request']->data['logo6']:'';

				//header

				$data['Option']['value']['idSlider']= (isset($dataSend['request']->data['idSlider']))? $dataSend['request']->data['idSlider']:'';
				$data['Option']['value']['idSlider2']= (isset($dataSend['request']->data['idSlider2']))? $dataSend['request']->data['idSlider2']:'';

				
				$data['Option']['value']['titleAbout']= (isset($dataSend['request']->data['titleAbout']))? $dataSend['request']->data['titleAbout']:'';
				$data['Option']['value']['contentAbout']= (isset($dataSend['request']->data['contentAbout']))? $dataSend['request']->data['contentAbout']:'';

				$data['Option']['value']['imgReason1']= (isset($dataSend['request']->data['imgReason1']))? $dataSend['request']->data['imgReason1']:'';
				$data['Option']['value']['imgReason2']= (isset($dataSend['request']->data['imgReason2']))? $dataSend['request']->data['imgReason2']:'';
				$data['Option']['value']['imgReason3']= (isset($dataSend['request']->data['imgReason3']))? $dataSend['request']->data['imgReason3']:'';
				$data['Option']['value']['imgReason4']= (isset($dataSend['request']->data['imgReason4']))? $dataSend['request']->data['imgReason4']:'';

				$data['Option']['value']['titleReason1']= (isset($dataSend['request']->data['titleReason1']))? $dataSend['request']->data['titleReason1']:'';
				$data['Option']['value']['titleReason2']= (isset($dataSend['request']->data['titleReason2']))? $dataSend['request']->data['titleReason2']:'';
				$data['Option']['value']['titleReason3']= (isset($dataSend['request']->data['titleReason3']))? $dataSend['request']->data['titleReason3']:'';
				$data['Option']['value']['titleReason4']= (isset($dataSend['request']->data['titleReason4']))? $dataSend['request']->data['titleReason4']:'';

				$data['Option']['value']['contentReason1']= (isset($dataSend['request']->data['contentReason1']))? $dataSend['request']->data['contentReason1']:'';
				$data['Option']['value']['contentReason2']= (isset($dataSend['request']->data['contentReason2']))? $dataSend['request']->data['contentReason2']:'';
				$data['Option']['value']['contentReason3']= (isset($dataSend['request']->data['contentReason3']))? $dataSend['request']->data['contentReason3']:'';
				$data['Option']['value']['contentReason4']= (isset($dataSend['request']->data['contentReason4']))? $dataSend['request']->data['contentReason4']:'';
				$data['Option']['value']['logof1']= (isset($dataSend['request']->data['logof1']))? $dataSend['request']->data['logof1']:'';
				$data['Option']['value']['logof2']= (isset($dataSend['request']->data['logof2']))? $dataSend['request']->data['logof2']:'';
				$data['Option']['value']['logof3']= (isset($dataSend['request']->data['logof3']))? $dataSend['request']->data['logof3']:'';

				$data['Option']['value']['company']= (isset($dataSend['request']->data['company']))? $dataSend['request']->data['company']:'';
				$data['Option']['value']['timeOpenDoor']= (isset($dataSend['request']->data['timeOpenDoor']))? $dataSend['request']->data['timeOpenDoor']:'';
				$data['Option']['value']['facebook']= (isset($dataSend['request']->data['facebook']))? $dataSend['request']->data['facebook']:'';

				$data['Option']['value']['idtintuc']= (isset($dataSend['request']->data['idtintuc']))? $dataSend['request']->data['idtintuc']:'';
				$data['Option']['value']['imgCourse']= (isset($dataSend['request']->data['imgCourse']))? $dataSend['request']->data['imgCourse']:'';

				$data['Option']['value']['video1']= (isset($dataSend['request']->data['video1']))? $dataSend['request']->data['video1']:'';
				$data['Option']['value']['video2']= (isset($dataSend['request']->data['video2']))? $dataSend['request']->data['video2']:'';
				$data['Option']['value']['video3']= (isset($dataSend['request']->data['video3']))? $dataSend['request']->data['video3']:'';

				
				$data['Option']['value']['idchinhsach']= (isset($dataSend['request']->data['idchinhsach']))? $dataSend['request']->data['idchinhsach']:'';
				


				



				$modelOption->saveOption('themeSettingsms64', $data['Option']['value']);
				$mess= 'lưu thành công';
			}

			setVariable('mess',$mess);
			setVariable('data',$data);
			
		}else{
			$modelOption->redirect($urlHomes);
		}
	}

function allCatergory($dataSend){
	global $modelOption;

	$modelProduct = new Product();
	$listCategory= $modelOption->getOption('productCategory');

	$listCategoryName = array();
	$listCategorySlug = array();

	$listProduct = array();
	    if(!empty($listCategory['Option']['value']['category'])){
	        foreach ($listCategory['Option']['value']['category'] as $item) {
	           $listProduct[$item['id']]=$modelProduct->find('all',array('conditions'=>array('category'=> (int)$item['id'] )));
	           $listCategoryName[$item['id']]=$item['name'];
	           $listCategorySlug[$item['id']]=$item['slug'];
	        }
	    }

	setVariable('listProduct',$listProduct);
	setVariable('listCategoryName',$listCategoryName);
	setVariable('listCategorySlug',$listCategorySlug);
}


function indexTheme($input)
{
	global $modelAlbum;
	global $modelNotice;
	global $themeSetting;
	global $modelOption;

   $modelProduct= new Product();
   $modelStaff= new Staff();
    
    $page=1;
    $limit= 12;
    $conditions = array();
    $listNewProduct= $modelProduct->getPage($page, $limit, $conditions);
    $listStaff= $modelStaff->getPage($page, $limit, $conditions);

	$album= $modelAlbum->getAlbum($themeSetting['Option']['value']['idSlider']);
	$album2= $modelAlbum->getAlbum($themeSetting['Option']['value']['idSlider2']);


	$themeData = $modelOption->getOption('themeSettingsms64');


	setVariable('album',$album);
	setVariable('album2',$album2);
	setVariable('listNewProduct',$listNewProduct);
	setVariable('listStaff',$listStaff);

}
?>