<!DOCTYPE html>
<html>
<head>
<title>admin login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link  rel="stylesheet" href="style.css"/>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="../fonts/font-awesome-4.3.0/css/font-awesome.min.css">
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>


	<script>
function validateForm(){
   var t=document.getElementById('username').value;
   var pass = document.getElementById('password').value; 
   
     if(t.length == 0||isNaN(t) == false){
      alert('Please enter a value');
      return false;}
	  else if(pass.length == 0){
		 alert('Please enter  password');
         return false;
	  }
 }
</script>
</head>
<body>
<a href="../index.php"><button class="myButton">Mainsite</button></a>
 <img src="" style="background-image: url(8.jpg);">
 <div class="fix content_middle">
 <div class="fix login_form">
 <center><p class="fix form_p">ADMIN LOGIN</p></center>
 <!--<?php
 if($_GET['name']=='username'){
	 
	echo '<p style="color:red;">'.'your username is wrong'.'</p>'; 
 }
 else if($_GET['pass']=='yes'){
	 
	echo '<p style="color:red;">'.'your password is wrong'.'</p>'; 
 }?>-->
 
 
 <form method="post" action="login_process.php" name="wForm" onsubmit="return validateForm()">
 <p class="fix form_h4"><i class="fas fa-user"></i>Name:</p>
 <input type="text" name="username" id="username" class="inputs" />
 <p class="fix form_h4"><i class="fas fa-lock"></i>Password:</p>
 <input type="password" name="password" id="password" class="inputs" />
 <br />
 <input type="checkbox" name="check" value="yes">please keep me logged in
 <br /> <br />
 <center><input class="myButton" type="submit" value="Login" /></center>
 </form>
 </div>
 </div>
</body>
</html>
<?php 
if (isset($_GET['status'])) {
if ($_GET['status']=='failed') {?>

  <script>alert("Wrong password or username ");</script>  
  
  <?php
  }
}
?>