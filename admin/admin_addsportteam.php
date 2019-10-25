<?php 
$conn=mysqli_connect("localhost","root","","sportsdb");

	$team=mysqli_real_escape_string($conn,$_POST['team']);
	$category=mysqli_real_escape_string($conn,$_POST['category']);
	

 $sql="INSERT INTO sport_teams (team, sport)VALUES('$team','$category') ON DUPLICATE KEY UPDATE team='$team', sport='$category'";

if ($conn->query($sql) === TRUE) {
	
header('location:addsportteam.php?status=success');  
} else {
header('location:addsportteam.php?status=failed');
}
?>