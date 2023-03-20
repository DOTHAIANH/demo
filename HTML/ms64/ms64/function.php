<?php
$menus = array();

$menus[0]['title'] = 'Cài đặt';
$menus[0]['sub'][0] = array('name' => 'Cài đặt trang chủ', 'url' => $urlPlugins . 'theme/ms64-admin-settings.php', 'permission'=>'themeSettingsms64');
addMenuAdminMantan($menus);


global $themeSetting;
$themeSetting = $modelOption->getOption('themeSettingsms64');
?>