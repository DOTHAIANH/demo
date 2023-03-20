<?php
$menus = array();

$menus[0]['title'] = 'Cài đặt';
$menus[0]['sub'][0] = array('name' => 'Cài đặt trang chủ', 'url' => $urlPlugins . 'theme/trunggadabaco-admin-settings.php', 'permission'=>'themeSettingsTham');
$menus[0]['sub'][1]= array('name'=>'Cài đặt trên giao diện','url'=>$urlPlugins.'theme/trunggadabaco-admin-editIndex.php?layout=default','permission'=>'myduyenspaThemeSettingsDisplay');
addMenuAdminMantan($menus);
 
global $themeData;
$themeData = $modelOption->getOption('themeSettings');

global $themeSettings;
$themeSettings = $modelOption->getOption('themeSettingsTham');
?>

