<?php
ob_start();
session_start();

include 'database.php';

$tname=$_POST['tname'];
$year=$_POST['year'];
$status=$_POST['about'];


if($_FILES['logo']['error']>0)
{
  echo 'error';
}
else
{
	$prefix=$_SESSION['id'].time();
	$link="upload/".$prefix.$_FILES['logo']['name'];
	move_uploaded_file($_FILES['logo']['tmp_name'],$link);
}
$img_link="http://localhost/Project/upload/".$prefix.$_FILES['logo']['name']; 

	$sql="INSERT INTO tbl_team(teamname,teamlogo,year_founded, status)VALUES('$tname','$img_link','$year','$status') ";
	
	if ($conn->query($sql) === TRUE) {
	
		header('location:addteams.php?status=success');  
		} else {
		header('location:addteams.php?status=failed');
		}
	?>