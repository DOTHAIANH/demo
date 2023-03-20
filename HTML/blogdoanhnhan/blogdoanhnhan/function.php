<?php
	$menus= array();
	$menus[0]['title']= 'Theme Settings';
	$menus[0]['sub'][0]= array('name'=>'Cài đặt trang chủ','url'=>$urlPlugins.'theme/blogdoanhnhan-admin-settings.php','permission'=>'blogdoanhnhanThemeSettings');
	$menus[0]['sub'][1]= array('name'=>'Cài đặt trên giao diện','url'=>$urlPlugins.'theme/blogdoanhnhan-admin-editIndex.php?layout=default','permission'=>'blogdoanhnhanThemeSettingsDisplay');
    addMenuAdminMantan($menus);

    global $themeSettings;
	$themeSettings= $modelOption->getOption('blogdoanhnhanThemeSettings');


?>