<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trang chủ</title>
        <link rel="stylesheet" type="text/css" href="main/home.css"/>
    </head>
    <body>

                <?php 
                    $conn=mysqli_connect("localhost","root","","")or die("Can't Connect...");
                    mysqli_set_charset($conn, 'UTF8');
                    mysqli_select_db($conn,"vietbook");
                    $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:19;
                    $current_page = !empty($_GET['page'])?$_GET['page']:1;
                    $offset = ($current_page - 1) * $item_per_page;
                    $madm=$_GET['madm'];
                    $q="select * from sach where madm=$madm order by masach asc LIMIT ".$item_per_page." OFFSET ".$offset."";
                    $totalRecords = mysqli_query($conn, "SELECT * FROM sach where madm=$madm");
                    $totalRecords = $totalRecords->num_rows;
                    $totalPages = ceil($totalRecords / $item_per_page);
                    $res=mysqli_query($conn,$q) or die("Can't Execute Query..");
                    $row=mysqli_fetch_assoc($res);
                    echo '<table class="bangspnb" border = "0" width="100%" cellspacing = "0">';
                    echo '<h2 class="spnoibat" style=" font-family: Playfair Display; font-weight:bold; margin-top:20px;color:green; margin-bottom:20px;">TẤT CẢ SÁCH</h2>';
                    $count=0;
                    while ($row=  mysqli_fetch_array($res))
                    {
                        if($count==0)
                        {
                                echo '<tr>';
                        }
                        echo 
        //                '<TR><TD>'.$row['hinhanh'].'</TD><TD>'.$row['tensach'].'</TD></TR>';     
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
                            <img src="'.$row['hinhanh'].'" width="200" height="280" style="margin-left:10px" >
                            <p style="text-align:center; color:black; font-size:18px; font-weight:bold;   font-family: Playfair Display;">'.$row['tensach'].'</p>
                            <P style="border:1px solid gray"></p>
                            <p style="text-align:center; color:red; font-weight:bold;   font-family: Playfair Display;">'.$row['gia'].'VNĐ</p>
                            <p style="text-align:center;  color:black; font-family: times;  text-decoration: line-through;">'.$row['giagoc'].'VNĐ</p>
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
                ?>
    </body>
</html>
