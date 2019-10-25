<?php
session_start();
include 'database.php';
 if($_SERVER["REQUEST_METHOD"] == "POST") {
$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);

$sql = "SELECT id FROM admin WHERE username = '$username' and passcode = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);

      if($count == 1) {
      $_SESSION['login_user'] = $username;
      header('location:admin.php?status=success');  
       } else {
       header('location:adminlogin.php?status=failed');
       }
}
?>
