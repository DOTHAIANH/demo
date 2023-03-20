<?php 
    if(isset($_GET['route'])) {
        $temp = $_GET['route'];
    }
    else {
        $temp = '';
    }

    if($temp=='category') {
        include("main/category.php");
    }
    else if($temp=='cart') {
        include("main/cart.php");
    }
    else if($temp=='detail') {
        include("main/detail.php");
    }
    else if($temp=='contact') {
        include("main/contact.php");
    }
    else if($temp=='register') {
        include("user/register.php");
    }
    else if($temp=='login') {
        include("user/login.php");
    }
    else if($temp=='forgot') {
        include("user/change-pwd.php");
    }
    else {
        include("main/index.php");
    }
?>