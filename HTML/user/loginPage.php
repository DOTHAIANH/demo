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
              <form class="register-form" role="form" method="post" action="<?php echo $urlHomes.'saveUser';?>">
                <?php
					if(isset($_GET['status'])){
						switch ($_GET['status']) {
							case 1: echo '<p style="color:red;">Đăng ký thành công. Bạn có thể <a href="'.getLinkLogin().'">đăng nhập</a> để mua hàng !</p>';break;
							case -1: echo '<p style="color:red;">Bạn cần điền đầy đủ các trường thông tin !</p>';break;
							case -2: echo '<p style="color:red;">Tài khoản này đã tồn tại !</p>';break;
							case -3: echo '<p style="color:red;">Mật khẩu nhập lại chưa đúng !</p>';break;
							case -4: echo '<p style="color:red;">Nhập sai mã xác nhận !</p>';break;
						}
					}
				?>
                <div class="back-to-home">
                    <a href="/">
                        <i class="fa-solid fa-house"></i>
                    </a>
                </div>
                <img src="<?php echo $themeSettings['Option']['value']['logo'];?>" class="pdb-20" width="80" alt="">
                <p class="pdb-20" style="font-weight: 700; font-size: 20px;">REGISTER</p>
                <input type="text" id="fullname" name="fullname" placeholder="Fullname" required>
                <input type="text" id="username" name="username" placeholder="Username" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <input type="password" id="passwordAgain" name="passwordAgain" placeholder="Confirm password" required>
                <input type="text" id="email" name="email" placeholder="Email address" required>
                <input type="number" id="phone" name="phone" placeholder="Phone number" required>
                <input type="text" id="address" name="address" placeholder="Address" required>
                <button type="submit">create</button>
                <p class="registered">Already registered? 
                    <a href="#">Sign In</a>
                </p>
                
              </form>
              <form class="login-form" role="form" method="post" action="<?php echo $urlHomes.'checkLogin';?>">
                <?php
                    if(isset($_GET['status'])){
                        switch ($_GET['status']) {
                            case -1: echo '<p style="color:red;">Sai tên đăng nhập hoặc mật khẩu !</p>';break;
                        }
                    }
                ?>
                <div class="back-to-home">
                    <a href="/">
                        <i class="fa-solid fa-house"></i>
                    </a>
                </div>
                <img src="<?php echo $themeSettings['Option']['value']['logo'];?>" class="pdb-20" width="80" alt="">
                <p class="pdb-20" style="font-weight: 700; font-size: 20px;">LOGIN</p>
                <input type="text" name="username" id="username" placeholder="Username" require> 
                <input type="password" id="password" name="password" placeholder="Password" require>
                <button type="submit">Login</button>
                <p class="registered">Not registered? 
                    <a href="#">Create an account</a>
                </p>
                <p class="lost-pwd" style="margin-top: 20px;margin-bottom:0">
                    <a href="/forgetpassword">Lost your password?</a>
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








