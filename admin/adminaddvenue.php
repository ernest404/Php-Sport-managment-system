<?php
include 'database.php';

$category=$_POST['category'];
$vname=mysqli_real_escape_string($conn,$_POST['vname']);
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

$sql="INSERT INTO venue(vname,image,category, capacity, vtype )VALUES('$vname','$img_link','$category','$capacity','$type')";
	
if ($conn->query($sql) === TRUE) {
	echo $img_link;  
    } else {
    header('location:addvenue.php?status=failed');
    }
 ?>
 <?php
// Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert === TRUE) {
     header('location:addvenue.php?status=sucess');
    } else {
    header('location:addvenue.php?status=failed');
    }
 ?>
 <?php
?>
