<?php
	$menus= array();
	$menus[0]['title']= 'Popup Content';
    $menus[0]['sub'][0]= array('name'=>'Popup Setting','classIcon'=>'fa-link','url'=>$urlPlugins.'admin/popupHome-setting.php','permission'=>'settingPopupHome');
    addMenuAdminMantan($menus);
    
	function showPopupHome()
	{
		global $modelOption;
		global $infoSite;
		global $urlHomes;
		
		$data= $modelOption->getOption('popupHome');
		if($data['Option']['value']['status']==1)
		{ 
		?>

			<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
			<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
			<link rel="stylesheet" href="/resources/demos/style.css">
			
			<script>
				function showPopup()
				{
					$( "#popupData" ).dialog({
						width: 1000,
						height: 500,
						show: { effect: "explode", duration: 1000 },
						hide: { effect: "explode", duration: 1000 },
						resizable: false,
				        modal: true,
					});
				}

				setTimeout(showPopup, 2000);
			</script>
			
			<style>
				.popupData{
					background-color: #ffffff;
				    border-radius: 5px;
				    display: none;
				    max-width: 80%;
				    padding: 10px;
				    z-index: 99999 !important;
				}
				.ui-dialog
				{
					position: fixed;
				}
				.ui-widget-overlay{
					opacity: 0.7;
				}
			</style>
			<div class="popupData" id="popupData"><?php echo $data['Option']['value']['content'];?></div>
		<?php }
	}
?>