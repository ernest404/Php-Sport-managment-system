<?php 
$conn=mysqli_connect("localhost","root","","sportsdb");

	$notice=mysqli_real_escape_string($conn,$_POST['notice']);
	$category=mysqli_real_escape_string($conn,$_POST['category']);
	

 $sql="INSERT INTO tbl_notices(notice,noticedate, category)VALUES('$notice',CURRENT_TIMESTAMP,'$category')";
	
 if ($conn->query($sql) === TRUE) {
	
	header('location:updatenotices.php?status=success');  
	} else {
	header('location:updatenotices.php?status=failed');
	}
	?>