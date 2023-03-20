<?php
$conn=mysqli_connect("localhost","root","","vietbook")or die("Can't Connect...");
           session_start();          
			$query="delete from danhmuc where madm =".$_REQUEST['sid'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:dsdanhmuc.php");

?>
