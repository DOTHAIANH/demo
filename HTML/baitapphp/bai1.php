<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 1</title>
</head>
<body>
    <!-- Bai 1a -->
    <?php
        $mang = array(1,2,3,4,5,6,7,8,9,10);
        echo 'Phan tu lon nhat trong mang la: '.max($mang);
        echo 'Phan tu nho nhat trong mang la: '.min($mang);
    ?>

    <!-- Bai 1b -->
    <?php
        $mang = array(1,2,3,4,5,6,7,8,9,10);
        
        for ($mang = 0; $mang <= 10; $mang++) {
            if($mang %2 == 0) {
                echo "$mang la so chan";
            } else {
                echo "$mang la so le";
            }
        }
    ?>

    <!-- Bai 1c -->
    <?php 
        $mang = array(1,2,3,4,5,6,7,8,9,10);
        

    ?>

    <!-- Bai 2a -->
    <?php
        $a = "Xin chao";
        $b = "Thai Anh";
        $c = $a.''.$b;
        $length = strlen($c);

        echo $length;
    ?>

    <!-- Bai 2b -->
    <?php
        $a = "Xin chao";
        $b = "Thai Anh";
        $c = $a.''.$b;

        echo str_word_count($c);
    ?>

    <!-- Bai 2c -->
    <?php
        $a = "Xin chao";
        $b = "Thai Anh";
        $c =  strpos($a, $b);

        if ($c == false) {
            echo "kí tự'".$b."' không tồn tại trong chuỗi"; 
        }
    ?>

</body>
</html>