<?php
include 'database.php';

$category=$_POST['category'];
$name=mysqli_real_escape_string($conn,$_POST['name']);
$type=mysqli_real_escape_string($conn,$_POST['type']);
$capacity=mysqli_real_escape_string($conn,$_POST['capacity']);

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

$sql="INSERT INTO tbl_venue(name,category, capacity, type, image )VALUES('$name','$category','$capacity','$type','$img_link')";
	
if ($conn->query($sql) === TRUE) {
    header('location:addvenue.php?status=success');  
} else {
header('location:addvenue.php?status=failed');
}
?>