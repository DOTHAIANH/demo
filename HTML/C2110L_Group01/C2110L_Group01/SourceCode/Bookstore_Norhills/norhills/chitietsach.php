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
        <link rel="stylesheet" type="text/css" href="main/chitietsach.css"/>
    </head>
    <style>
            *{
    margin: 0px;
    padding: 0px;
}

.left-menu{
    width: 250px;
}

.noidung{
    display: flex;
    margin: 0px 50px;
    margin-bottom: 20px;
}

.homepage{
    width: 870px;
    margin-top: 40px;
    margin-left: 100px;
}

.name{
    color: #f46523;
    margin-left: 120px;
    font-size: 30px;
    margin-bottom: 20px;
}

.menu{
    margin-bottom: 50px;
}

.btgh{
    width: 140px;
    height: 35px;
    background: green;
    border:none;
    margin-left: 330px;
    margin-top: 10px;
    border-radius: 15px;
    color: #FAFAFA;
}
            </style>
    <body>
        <div>
            <?php session_start();
                if(isset($_SESSION['status']))
                {
                       include("header.php");
                }
                else {
                    include ("header-kh.php");
                }
            ?>
        </div>

        <div class="noidung">
            <div class="left-menu">
                <div>
                    <?php
                        include("cnkh.php");
                    ?>
                </div>
                <div class="menu">
                    <?php
                        include("menu.php");
                    ?>
                </div>
                
            </div>
            <div class="homepage">
                <?php 
                    $conn=mysqli_connect("localhost","root","","")or die("Can't Connect...");
                    mysqli_set_charset($conn, 'UTF8');
                    mysqli_select_db($conn,"vietbook");
                    $id=$_GET['id'];
                    $q="select * from sach where masach=$id";
                    $res=mysqli_query($conn,$q) or die("Can't Execute Query..");
                    $row=mysqli_fetch_assoc($res);
                    echo '<h2 class="name" style="text-align:center; color:green; font-family:Playfair Display;" >'.$row['tensach'].'</h2>';
                    echo '	<table border="0" width="100%">
                                    <tr>
                                           <td><hr color="#088A08"></td>
                                   </tr>
                                    <tr align="center" bgcolor="#088A08">
                                            <td style="color:white; font-size:20px ; font-family:Playfair Display;">Thông tin sách</td>
                                   </tr>
                                   <tr>
                                           <td><hr color="#088A08"></td>
                                   </tr>
                            </table>

                           <table border="0"  width="100%" bgcolor="#F2F2F2">
                                   <tr> 

                                           <td width="25%" rowspan="3">
                                                   <img src="'.$row['hinhanh'].'" width="250px">

                                           </td>
                                   </tr>

                                   <tr > 
                                           <td width="100%" height="100%" >
                                                   <table border="0"  width="100%" height="100%">
                                                           <tr valign="top" height="20px">
                                                                   <td align="right" width="20%" margin-left="10px">Tên sách</td>
                                                                   <td width="4%">: </td>
                                                                   <td align="left">'.$row['tensach'].'</td>
                                                           </tr>


                                                           <tr height="20px">
                                                                   <td align="right">Tên tác giả</td>
                                                                   <td>: </td>
                                                                   <td align="left">'.$row['tentacgia'].'</td>

                                                           </tr>


                                                           <tr height="20px">
                                                                   <td align="right">Năm xuất bản </td>
                                                                   <td>: </td>
                                                                   <td align="left">'.$row['namxb'].'</td>

                                                           </tr>

                                                           <tr height="20px"> 
                                                                   <td align="right">Số lượng còn</td>
                                                                   <td>: </td>
                                                                   <td align="left">'.$row['soluong'].' cuốn</td>

                                                           </tr>

                                                           <tr height="20px">
                                                                   <td align="right">Giá</td>
                                                                   <td>: </td>
                                                                   <td align="left">'.$row['gia'].'VNĐ</td>

                                                           </tr>
                                                           <tr height="20px">
                                                           <td align="right">Miêu tả</td>
                                                           <td>: </td>
                                                           <td align="left">'.$row['mieuta'].'</td>

                                                   </tr>
                                                   </table>


                                           </td>
                                   </tr>
                           </table>
                           <table border="0" width="100%">
                                    <tr>
                                           <td><hr color="green"></td>
                                   </tr>
                                    <tr align="center" bgcolor="green">
                                            <td style="color:white; font-size:17px">Lựa chọn sách này!!</td>
                                   </tr>
                                   <tr>
                                           <td><hr color="green""></td>
                                   </tr>

                            </table>

                            <tr><td colspan=2><hr color="green""></td></tr>

                           <table border="0" width="100%">
                                    <tr align="center" bgcolor="green">';

                                    if(isset($_SESSION['status']))
                                    {
                                           echo ' <a href="xulictsachgh.php?ts='.$row['tensach'].'&id='.$row['masach'].'&ttg='.$row['tentacgia'].'&gia='.$row['gia'].'">
                                                   <input class="btgh" type="button" value="Thêm vào giỏ hàng">
                                           </a></td>';
                                   }
                                   else
                                   {
                                           echo '<td><a href="trangdangnhap.php"> <h3 style="color:white";>Vui lòng đăng nhập</h3></a></td>';
                                   }
                                   echo '</tr>
                                   <br>
                                
                           </table>';
                           
                ?>
            </div>
        </div>
        <div>
            <?php
                include("footer.php");
            ?>
        </div>
    </body>
</html>
