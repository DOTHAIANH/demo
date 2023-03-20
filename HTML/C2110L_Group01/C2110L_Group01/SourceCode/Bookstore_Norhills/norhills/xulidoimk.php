<?php session_start();
        if(isset($_SESSION['status']))
                    {
        $conn=mysqli_connect("localhost","root","","vietbook")or die("Can't Connect...");
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['mkm']) || empty($_POST['mkmnl']))
		{
			$msg.="<li>Vui lòng nhập đầy đủ thông tin";
		}	
		
                elseif($_POST['mkm']!=$_POST['mkmnl'])
		{
			$msg.="<li>Vui lòng nhập lại đúng mật khẩu";
                         header("location:doimk.php?error=".$msg);
		}
		
		elseif($msg!="")
		{
			header("location:doimk.php?error=".$msg);
		}
                
                elseif(strlen($_POST['mkm'])>10)
		{
			$msg.="<li>Vui lòng nhập đúng giới hạn của mật khẩu";
                        header("location:doimk.php?error=".$msg);
                        
		}
                
                elseif(strlen($_POST['mkm'])<6)
		{
			$msg.="<li>Vui lòng nhập đúng giới hạn của mật khẩu";
                        header("location:doimk.php?error=".$msg);
		}
                
		else
		{
                        $mkm=$_POST['mkm'];
                        $mndkh=$_SESSION['mnd'];			
			$query="update khachhang set password='$mkm' where makh='$mndkh' ";
                        mysqli_set_charset($conn, 'UTF8');
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			header("location:indexkh.php?ok=1");

		}
	}
	else
	{
		header("location:indexkh.php");
	}
                    }
?>