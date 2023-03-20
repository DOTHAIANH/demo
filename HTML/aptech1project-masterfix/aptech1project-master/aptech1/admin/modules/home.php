<?php 
    require_once('../config/dbhelp.php');
    if( isset($_GET['action']) && isset($_GET['query']) ) {
        $temp = $_GET['action'];
        $query = $_GET['query'];
    }
    else {
        $temp = $query = '';
    }

    if($temp=='productCategory'  && $query=='add') {
        include("modules/product category/index.php");
        include("modules/product category/add.php"); 
    }
    else if($temp=='productCategory' && $query=='edit') {
        include("modules/product category/edit.php");
    }
    else if($temp=='contact') {
        include("modules/contact/index.php");
    }
    else {
        include("modules/welcome.php");
    }
?>