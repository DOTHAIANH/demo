<?php
$conn=mysqli_connect("localhost","root","","vietbook")or die("Can't Connect...");
           session_start();          
			$query="delete from sach where masach =".$_REQUEST['sid'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:sachad.php");

?>
