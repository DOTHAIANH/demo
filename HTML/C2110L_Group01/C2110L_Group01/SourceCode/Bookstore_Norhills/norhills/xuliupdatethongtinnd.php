<?php session_start();
        if(isset($_SESSION['status']))
                    {
        $conn=mysqli_connect("localhost","root","","vietbook")or die("Can't Connect...");
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['tnd']) || empty($_POST['dc']) || empty($_POST['sdt']) || empty($_POST['em']) || empty($_POST['ns']) || empty($_POST['gt']))
		{
			$msg.="<li>Vui lòng nhập đầy đủ thông tin";
		}	
		
		
		if(is_numeric($_POST['tnd']))
		{
			$msg.="<li>Vui lòng nhập đúng tên người dùng";
		}
		
		if($msg!="")
		{
			header("location:updatethongtinnd.php?error=".$msg);
		}
		else
		{
			$tnd=$_POST['tnd'];
			$sdt=$_POST['sdt'];
			$dc=$_POST['dc'];
			$em=$_POST['em'];
			$ns=$_POST['ns'];
                        $gt=$_POST['gt'];
                        
                    {
			
			$query="update khachhang set tenkh='$tnd', diachikh='$dc', sdtkh='$sdt', emailkh='$em', ngaysinh='$ns', gioitinh='$gt' where emailkh='$em' ";
                        mysqli_set_charset($conn, 'UTF8');
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			header("location:indexkh.php?ok=1");
                    }
		}
	}
	else
	{
		header("location:indexkh.php");
	}
                    }
?>