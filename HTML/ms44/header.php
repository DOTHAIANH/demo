<?php global $ThemeSettings?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" title="" href="<?php echo $urlThemeActive; ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php echo $urlThemeActive; ?>css/font-awesome.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php echo $urlThemeActive; ?>css/slick.min.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php echo $urlThemeActive; ?>css/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php echo $urlThemeActive; ?>css/jquery.mmenu.all.css"> 
    <link rel="stylesheet" type="text/css" title="" href="<?php echo $urlThemeActive; ?>css/animate.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php echo $urlThemeActive; ?>css/style.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php echo $urlThemeActive; ?>css/responsive.css">
    <script type="text/javascript" src="<?php echo $urlThemeActive; ?>js/jquery.min.js"></script>

    <?php
    mantan_header();
    if (function_exists('showSeoHome')) {
        showSeoHome();
    }
    if (function_exists('showContentShareFacebook')) {
        showContentShareFacebook();
    }
    ?>
</head>
<body>  
    <header>
        <div class="header-menu  wow fadeInDown "   data-wow-duration="1s"  >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo"><a href="/"><img src="<?php echo $ThemeSettings['Option']['value']['imgLogo'] ;?>" class="img-fluid" alt=""></a></div>
                    </div>
                    <div class="col-md-9">
                        <ul>
                            <?php  
                                    $menus = getMenusDefault();  
                                        if (!empty($menus)) {  
                                            foreach ($menus as $categoryMenu) {  
                                                if (!empty($categoryMenu['sub'])) {  ?>
                                        <li class="">
                                             <a class=" " href="<?php echo $categoryMenu['url'] ?>" ><?php echo $categoryMenu['name'] ?><i class="fa fa-angle-down"></i></a>
                                        
                                                    <ul>
                                                    <?php foreach ($categoryMenu['sub'] as $subMenu) { ?>
                                                        <li>
                                                            <a class="" href="<?php echo $subMenu['url'] ?>">
                                                                <?php echo $subMenu['name'] ?> 
                                                            </a>
                                                        </li>
                                                     <?php }  ?>
                                                    </ul>
                                        </li>
                                            <?php
                                            } else {
                                                ?>
                                         <li class="">
                                            <a class="" href="<?php echo $categoryMenu['url'] ?>"><?php echo $categoryMenu['name'] ?></a>
                                        </li>
                         <?php } } } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mobile" style="display: none;">
            <div class="container">
                <div class="menu-mobile">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-6">
                            <div class="logo"><a href="/"><img src="<?php echo $ThemeSettings['Option']['value']['imgLogo'] ;?>" class="img-fluid" alt=""></a></div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="header text-right">
                                <a title="" href="#menu"><i class="fa fa-bars"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav id="menu">
                    <ul>
                         <?php  
                                    $menus = getMenusDefault();  
                                        if (!empty($menus)) {  
                                            foreach ($menus as $categoryMenu) {  
                                                if (!empty($categoryMenu['sub'])) {  ?>
                                        <li class="">
                                             <a class=" " href="<?php echo $categoryMenu['url'] ?>" ><?php echo $categoryMenu['name'] ?><i class="fa fa-angle-down"></i></a>
                                        
                                                    <ul>
                                                    <?php foreach ($categoryMenu['sub'] as $subMenu) { ?>
                                                        <li>
                                                            <a class="" href="<?php echo $subMenu['url'] ?>">
                                                                <?php echo $subMenu['name'] ?> <i class="fa fa-angle-right"></i>
                                                            </a>
                                                        </li>
                                                     <?php }  ?>
                                                    </ul>
                                        </li>
                                            <?php
                                            } else {
                                                ?>
                                         <li class="">
                                            <a class="" href="<?php echo $categoryMenu['url'] ?>"><?php echo $categoryMenu['name'] ?></a>
                                        </li>
                         <?php } } } ?>
                        
                    </ul>
                </nav>
            </div>
        </div>
    </header>