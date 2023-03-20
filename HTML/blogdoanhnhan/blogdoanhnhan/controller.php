<?php
	function settings($dataSend)
	{
		global $modelOption;
		global $isRequestPost;
		global $urlHomes;

		if(checkAdminLogin()){
			$data= $modelOption->getOption('blogdoanhnhanThemeSettings');
			$mess= '';
			
			if($isRequestPost){

			
				$data['Option']['value']['logo']= @$dataSend['request']->data['logo'];
				$data['Option']['value']['textSlide']= @$dataSend['request']->data['textSlide'];
				$data['Option']['value']['textSlide1']= @$dataSend['request']->data['textSlide1'];
				$data['Option']['value']['titleLearn']= @$dataSend['request']->data['titleLearn'];
				$data['Option']['value']['titleLearn1']= @$dataSend['request']->data['titleLearn1'];
				$data['Option']['value']['map']= @$dataSend['request']->data['map'];
				$data['Option']['value']['messenger']= @$dataSend['request']->data['messenger'];
				$data['Option']['value']['color']= @$dataSend['request']->data['color'];
				$data['Option']['value']['color1']= @$dataSend['request']->data['color1'];
				$data['Option']['value']['color2']= @$dataSend['request']->data['color2'];

				
				$modelOption->saveOption('blogdoanhnhanThemeSettings', $data['Option']['value']);
				$mess= 'Lưu dữ liệu thành công';
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
		global $modelAlbum;
	  global $modelOption;
	  global $modelNotice;
	  global $urlNow;


		if(checkAdminLogin()){
			$data= $modelOption->getOption('blogdoanhnhanThemeSettings');
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
				
				$modelOption->saveOption('blogdoanhnhanThemeSettings', $data['Option']['value']);
				$mess= 'Lưu dữ liệu thành công';
			}

			$themeSettings= $data;
		}else{
			$modelOption->redirect($urlHomes);
		}


		 $themeData = $modelOption->getOption('blogdoanhnhanThemeSettings');



	  $page= (isset($_GET['page']))? (int) $_GET['page']:1;
        	if($page<=0) $page=1;
        	
	    	$limit= 6;
	    	$conditions= array('type'=>'post');
	    	$listData= $modelNotice->getPageData($page,$limit, $conditions);

	    	$totalData= $modelNotice->find('count',array('conditions' => $conditions));
	
			$balance= $totalData%$limit;
			$totalPage= ($totalData-$balance)/$limit;
			if($balance>0)$totalPage+=1;
			
			$back=$page-1;$next=$page+1;
			if($back<=0) $back=1;
			if($next>=$totalPage) $next=$totalPage;
			
			if(isset($_GET['page'])){
				$urlPage= str_replace('&page='.$_GET['page'], '', $urlNow);
				$urlPage= str_replace('page='.$_GET['page'], '', $urlPage);
			}else{
				$urlPage= $urlNow;
			}

			if(strpos($urlPage,'?')!== false){
				if(count($_GET)>1 ||  (count($_GET)==1 && !isset($_GET['page']))){
					$urlPage= $urlPage.'&page=';
				}else{
					$urlPage= $urlPage.'page=';
				}
			}else{
				$urlPage= $urlPage.'?page=';
			}

	        setVariable('listData',$listData);
	        
			setVariable('totalPage',$totalPage);
	        setVariable('page',$page);
	        setVariable('back',$back);
	        setVariable('next',$next);
	        setVariable('urlPage',$urlPage);
	}

	function indexTheme()
	{
	  global $modelAlbum;
	  global $modelOption;
	  global $modelNotice;
	  global $urlNow;


	  $themeData = $modelOption->getOption('blogdoanhnhanThemeSettings');



	  $page= (isset($_GET['page']))? (int) $_GET['page']:1;
        	if($page<=0) $page=1;
        	
	    	$limit= 6;
	    	$conditions= array('type'=>'post');
	    	$listData= $modelNotice->getPageData($page,$limit, $conditions);

	    	$totalData= $modelNotice->find('count',array('conditions' => $conditions));
	
			$balance= $totalData%$limit;
			$totalPage= ($totalData-$balance)/$limit;
			if($balance>0)$totalPage+=1;
			
			$back=$page-1;$next=$page+1;
			if($back<=0) $back=1;
			if($next>=$totalPage) $next=$totalPage;
			
			if(isset($_GET['page'])){
				$urlPage= str_replace('&page='.$_GET['page'], '', $urlNow);
				$urlPage= str_replace('page='.$_GET['page'], '', $urlPage);
			}else{
				$urlPage= $urlNow;
			}

			if(strpos($urlPage,'?')!== false){
				if(count($_GET)>1 ||  (count($_GET)==1 && !isset($_GET['page']))){
					$urlPage= $urlPage.'&page=';
				}else{
					$urlPage= $urlPage.'page=';
				}
			}else{
				$urlPage= $urlPage.'?page=';
			}

	        setVariable('listData',$listData);
	        
			setVariable('totalPage',$totalPage);
	        setVariable('page',$page);
	        setVariable('back',$back);
	        setVariable('next',$next);
	        setVariable('urlPage',$urlPage);

	}
?>