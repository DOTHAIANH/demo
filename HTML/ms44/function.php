<?php
    $menus= array();
    $menus[0]['title']= 'Theme Settings';
    $menus[0]['sub'][0]= array('name'=>'Cài đặt trang chủ','url'=>$urlPlugins.'theme/ms44-admin-settings.php','permission'=>'ms44ThemeSettings');
    addMenuAdminManTan($menus);
    global $ThemeSettings;
    $ThemeSettings= $modelOption->getOption('ms44ThemeSettings');
?>