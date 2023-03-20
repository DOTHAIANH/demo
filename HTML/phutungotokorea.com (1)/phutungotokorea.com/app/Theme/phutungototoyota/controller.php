<?php
	function settings($dataSend)
	{
		global $modelOption;
		global $urlPlugins;
		global $isRequestPost;
		global $urlHomes;
		global $languageMantan;

		if(checkAdminLogin()){
			$data= $modelOption->getOption('phutungototoyotaThemeSettings');
			$mess= '';

			if($isRequestPost){

				$data['Option']['value']['idLinkWebCategorySidebar']= (isset($dataSend['request']->data['idLinkWebCategorySidebar']))? (int) $dataSend['request']->data['idLinkWebCategorySidebar']:'';
				$data['Option']['value']['idLinkWebCategoryFooter']= (isset($dataSend['request']->data['idLinkWebCategoryFooter']))? (int) $dataSend['request']->data['idLinkWebCategoryFooter']:'';
				$data['Option']['value']['idLinkWebCategoryProductDetail']= (isset($dataSend['request']->data['idLinkWebCategoryProductDetail']))? (int) $dataSend['request']->data['idLinkWebCategoryProductDetail']:'';
				
				$data['Option']['value']['textHeader']= $dataSend['request']->data['textHeader'];
				$data['Option']['value']['textFooter']= $dataSend['request']->data['textFooter'];
				$data['Option']['value']['textContactFooter']= $dataSend['request']->data['textContactFooter'];
				
				$modelOption->saveOption('phutungototoyotaThemeSettings', $data['Option']['value']);
				$mess= $languageMantan['saveSuccess'];
			}

			setVariable('mess',$mess);
			setVariable('data',$data);
		}else{
			$modelOption->redirect($urlHomes);
		}
	}
?>