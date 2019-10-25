<?php
include 'database.php';

$category=$_POST['category'];
$heading=mysqli_real_escape_string($conn,$_POST['heading']);
$article=mysqli_real_escape_string($conn,$_POST['status']);
$time=date("l jS \of F Y h:i:s A");
$headline=mysqli_real_escape_string($conn,$_POST['shortcut_status']);

if($_FILES['image']['error']>0)
{
  echo 'error';
}
else
{
	$prefix=$_SESSION['id'].time();
	$link="upload/".$prefix.$_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'],$link);
}
$img_link="http://localhost/Project/admin/upload/".$prefix.$_FILES['image']['name']; 

	$sql="INSERT INTO tbl_news(category,heading,status,date,image,shortcut_status)VALUES('$category','$heading','$article','$time','$img_link','$headline')";
	
  if ($conn->query($sql) === TRUE) {
	
    header('location:updatenews.php?status=success');    
    } else {
    header('location:updatenews.php?status=failed');
    }
    ?>