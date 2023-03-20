<?php session_start();

$conn=mysqli_connect("localhost","root","","vietbook")or die("Can't Connect...");

	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['tk']))
		{
			$msg.="Vui lòng nhập tên tài khoản";
		}
		
		if(empty($_POST['mk']))
		{
			$msg.="Vui lòng nhập mật khẩu";
		}
		
		if($msg!="")
		{
			header("location:trangdangnhap.php?error=".$msg);
		}
		else
		{

			$unm=$_POST['tk'];

			$q="select * from nhanvien where usename='$unm'";
			$q1="select * from khachhang where usename='$unm'";
                        mysqli_set_charset($conn, 'UTF8');
			$res=mysqli_query($conn,$q) or die("wrong query");
                        mysqli_set_charset($conn, 'UTF8');
                        $res1=mysqli_query($conn,$q1) or die("wrong query");
			$row=mysqli_fetch_assoc($res);
			$row1=mysqli_fetch_assoc($res1);
			
			if(!empty($row))
			{
				if($_POST['mk']==$row['password'])
				{
					$_SESSION=array();
					$_SESSION['unm']=$row['usename'];
					$_SESSION['uid']=$row['password'];
                                        $_SESSION['mnd']=$row['manv'];
                                        $_SESSION['tnd']=$row['tennv'];
                                        $_SESSION['dc']=$row['diachi'];
                                        $_SESSION['sdt']=$row['sdt'];
                                        $_SESSION['em']=$row['email'];
                                        $_SESSION['ns']=$row['ngaysinh'];
                                        $_SESSION['gt']=$row['gioitinh'];
					$_SESSION['status']=true;
					
					if($row['phanquyen']=="admin")
					{
						header("location:indexad.php");
					}
					else if($row['phanquyen']=="nvkho")
					{
						header("location:indexnvk.php");
					}
                                        else if($row['phanquyen']=="nvgiaohang")
					{
						header("location:indexnvgh.php");
					}
                                        
				}
				
				else
				{
					header("location:trangdangnhap.php?error=".$msg);
				}
			}
                        elseif (!empty($row1)) {
                            if($_POST['mk']==$row1['password'])
				{
					$_SESSION=array();
					$_SESSION['unm']=$row1['usename'];
					$_SESSION['uid']=$row1['password'];
                                        $_SESSION['mnd']=$row1['makh'];
                                        $_SESSION['tnd']=$row1['tenkh'];
                                        $_SESSION['dc']=$row1['diachikh'];
                                        $_SESSION['sdt']=$row1['sdtkh'];
                                        $_SESSION['em']=$row1['emailkh'];
                                        $_SESSION['ns']=$row1['ngaysinh'];
                                        $_SESSION['gt']=$row1['gioitinh'];
					$_SESSION['status']=true;
					

                                        header("location:indexkh.php");
                    }
                    else
				{
					header("location:trangdangnhap.php?error=".$msg);
				}
                        
                        
		}
                else{
                    $msg.="Tài khoản hoặc mật khẩu không đúng";
                    header("location:trangdangnhap.php?error=".$msg);
                }
                }
	}
	else
	{
		header("location:index.php");
	}
			
?>