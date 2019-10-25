<?php
session_start();
if (!isset($_SESSION['login_user'])) {

  echo '<script>
  window.location.href = "adminlogin.php";
  </script>';
 
}
include 'database.php';

$fname=$_POST['fname'];
$sname=$_POST['sname'];
$dob=$_POST['dob'];
$sport=$_POST['sport'];
$team=$_POST['team'];
$position=$_POST['position'];
$country=$_POST['country'];

if($_FILES['image']['error']>0)
{
  echo 'error';
}
else
{
	$prefix=$_SESSION['login_user'].time();
	$link="upload/".$prefix.$_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'],$link);
}
$img_link="http://localhost/Project/admin/upload/".$prefix.$_FILES['image']['name']; 

	$sql="INSERT INTO tbl_teamroaster(fname,sname,dp,DOB,sport,team,Position,Country )VALUES('$fname','$sname','$img_link','$dob','$team','$sport','$position','$country')";
	
  if ($conn->query($sql) === TRUE) {
	
    header('location:addplayers.php?status=success');  
    } else {
    header('location:addplayers.php?status=failed');
    }
    ?>