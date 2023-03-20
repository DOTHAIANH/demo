<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="copyright" content="" />
    <meta property="og:image" content="">
    <!--link css-->
    <link rel="stylesheet" type="text/css" href="{{ __BASE_URL__ }}/css/bootstrap.min.css">
    <style>
        #error {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            background: url("http://beta.gcosoftware.vn/fashion/public/frontend/images/bg-404.png") no-repeat center;
            background-size: cover;
            color: #fff;
        }
        #error:after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: #000000;
            opacity: .6;
        }

        #error .content {
            position: relative;
            z-index: 2;
        }

        #error .avar {
            padding: 80px 0 40px 0;
        }

        #error h1 {
            font-size: 60px;
            text-transform: uppercase;
            font-weight: 600;
            line-height: initial;
            margin-bottom: 10px;
        }

        #error p {
            font-size: 25px;
            margin-bottom: 30px;
        }

        #error .gohome a {
            border-radius: 5px;
            display: inline-block;
            height: 60px;
            line-height: 60px;
            color: #6f472d;
            padding: 0 50px;
            background: #fff;
            font-size: 20px;
            font-weight: 600;
            text-transform: uppercase;
        }

        #error .gohome a:hover {
            color: #fff;
            background: #d90000;
        }
    </style>
</head>
<body>
<section id="error">
    <div class="container">
        <div class="content text-center">
            <div class="avar"><img src="http://beta.gcosoftware.vn/fashion/public/frontend/images/404.png" class="img-fluid" alt=""></div>
            <h1>Không tìm thấy trang</h1>
            <p>Trang đã bị xóa hoặc địa chỉ URL không đúng</p>
            <div class="gohome"><a title="" href="{{ url('/') }}">Quay về trang chủ</a></div>
        </div>
    </div>
</section>
</body>
</html>