<?php
$conn=mysqli_connect("localhost","root","","sportsdb");

	$sportname=mysqli_real_escape_string($conn,$_POST['sportname']);
	$description=mysqli_real_escape_string($conn,$_POST['description']);
	$status=mysqli_real_escape_string($conn,$_POST['status']);

 $sql="INSERT INTO tbl_spor(name, description, status) VALUES ('$sportname','$description','$status')";
	

 if ($conn->query($sql) === TRUE) {
	
	header('location:addsport.php?status=success');  
	} else {
	header('location:addsport.php?status=failed');
	}
	?>