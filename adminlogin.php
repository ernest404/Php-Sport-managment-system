<!DOCTYPE html>
<html>
<head>
	<title>admin login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" href="css/all.css" crossorigin="anonymous">
	<script>

function validateForm(){
   var t=document.getElementById('username').value;
   var pass = document.getElementById('password').value; 
   
     if(t.length == 0||isNaN(t) == false){
      alert('Please enter a value');
      return false;}
	  else if(pass.length == 0){
		 alert('Please enter a password');
         return false;
	  }
 }
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link  rel="stylesheet" href="css/login.css"/>

</head>
<body>

 <img src="" style="background-image: url(8.jpg);">
 <div class="fix content_middle">
 <div class="fix login_form">
 <p class="fix form_p">ADMIN LOGIN</p>
 <!--<?php
 if($_GET['name']=='username'){
	 
	echo '<p style="color:red;">'.'your username is wrong'.'</p>'; 
 }
 else if($_GET['pass']=='yes'){
	 
	echo '<p style="color:red;">'.'your password is wrong'.'</p>'; 
 }?>-->
 
 
 <form method="post" action="login_process.php" name="wForm" onsubmit="return validateForm()">
 <h4 class="fix form_h4">Name:</h4>
 <i class="fas fa-user"></i>
 <input type="text" name="username" id="username" class="fix inputs" />
 <h4 class="fix form_h4">Password:</h4>
 <i class="fas fa-lock"></i>
 <input type="password" name="password" id="password" class="fix inputs" />
 <br />
 <input type="checkbox" name="check" value="yes">please keep me logged in
 <br /> <br />
 <input class="fix myButton" type="submit" value="Login" />
 </form>
 </div>
 </div>


</body>
</html>