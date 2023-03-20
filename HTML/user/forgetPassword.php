<?php 
    global $themeSettings;
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <?php
        mantan_header();
        if (function_exists('showSeoHome')) {
            showSeoHome();
        }
        if (function_exists('showContentShareFacebook')) {
            showContentShareFacebook();
        }
    ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

    <!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive; ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive; ?>css/library.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive; ?>css/font/be-vietnam-cufonfonts/stylesheet.css">

    <!-- SLICK SLIDE -->
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <script
    type="text/javascript"
    src="https://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
    type="text/javascript"
    src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script
    type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>

    <!-- JS -->
    <script src="<?php echo $urlThemeActive; ?>js/bannermain.js"></script>
    <script src="<?php echo $urlThemeActive; ?>js/slideproduct.js"></script>
    
</head>
<body>

<link rel="stylesheet" type="text/css" title="" href="<?php echo $urlThemeActive; ?>css/loginpage.css">

    <section class="sign-in">
        <div class="login-page">
            <div class="form-signin">
              
              <form class="login-form">
                <div class="back-to-home">
                    <a href="/">
                        <i class="fa-solid fa-house"></i>
                    </a>
                </div>
                <img src="<?php echo $themeSettings['Option']['value']['logo'];?>" class="pdb-20" width="80" alt="">
                <p class="pdb-20" style="font-size:12px">Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.</p>
                <p class="pdb-20">Username or Email</p>
                <input type="text" required="" name="email" value="">
                <button type="submit">Send</button>
                <p class="registered">
                    <a href="/loginpage">Back to Login</a>
                </p>
              </form>
              
            </div>
          </div>
    </section>

<script>
    $('.registered a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
</script>

</body>
</html>

<?php if(!empty($tmpVariable['mess'])) { ?>
    <div id="messModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Thông báo</h4>
                    <button type="button" class="close close_postion" data-dismiss="modal"><i class="fa fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <?php
                        echo $tmpVariable['mess'];  
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#messModal').modal('show');
    </script>
<?php } ?>