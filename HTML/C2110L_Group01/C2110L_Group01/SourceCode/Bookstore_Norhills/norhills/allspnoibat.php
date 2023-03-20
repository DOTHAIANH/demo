<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sản phẩm nỗi bật</title>
        <link rel="stylesheet" type="text/css" href="main/home.css"/>
    </head>
    <style>
        </style>
    <body>
            <?php
            $link = mysqli_connect("localhost","root","") or die ("khong the ket noi");
            mysqli_set_charset($link, 'UTF8');
            mysqli_select_db($link,"vietbook");
            $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:15;
            $current_page = !empty($_GET['page'])?$_GET['page']:1;
            $offset = ($current_page - 1) * $item_per_page;
            $sql="SELECT * FROM sach where noibat='co' order by masach asc LIMIT ".$item_per_page." OFFSET ".$offset."";
            $totalRecords = mysqli_query($link, "SELECT * FROM sach where noibat='co'");
            $totalRecords = $totalRecords->num_rows;
            $totalPages = ceil($totalRecords / $item_per_page);
            $result = mysqli_query($link,$sql);
            echo '<table class="bangspnb" border = "0" width="100%" cellspacing = "0">';
            echo '<h2 class="spnoibat" style="color:green; font-family: Playfair Display; margin-top:20px;font-weight:bold"> SÁCH NỔI BẬT </h2>';
            $count=0;
            while ($row= mysqli_fetch_array($result))
            {
                if($count==0)
                {
                        echo '<tr>';
                }
                echo 
                '<td class="cotspnoibat">';
                if(isset($_SESSION['status']))
                    { echo'
                    <a href="chitietsach.php?id='.$row['masach'].'">';
                            }
 else {
     echo'
                    <a href="chitietsachvl.php?id='.$row['masach'].'">';
 }
                    echo'
                    <img src="'.$row['hinhanh'].'" width="200" height="280" style="margin-left:10px">
                    <p style="text-align:center; color:black; font-weight:bold; font-family: Playfair Display;">'.$row['tensach'].'</p>
                    <p style="border:1px solid gray"></p>
                    <p style="text-align:center;  color:red; font-weight:bold; font-family: Playfair Display;">'.$row['gia'].'VNĐ</p>
                    <p style="text-align:center;  color:black;  font-family: times;  text-decoration: line-through;">'.$row['giagoc'].'VNĐ</p>
            </td>';
                $count++;																		
                if($count==4)
                {
                        echo '</tr>';
                        $count=0;
                }
            }
            echo '</table>';
            include ("pagination.php");
                    mysqli_free_result($result);
                    mysqli_close($link);
        ?>
    </body>
</html>

