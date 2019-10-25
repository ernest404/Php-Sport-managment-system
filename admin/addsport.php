
<?php  include 'database.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
	
</head>
<body>

<div class="header1">
    <div class="container">
      <div class="header-left">

        <a href="#"><img src="../Images/administrator-32.ico">Administrator<span></span></a>

      </div>
      <div class="header-left1">
        <p></p>
      </div>
      <div class="header-right">
        <ul>
          <li><span>S.M.S.</span></li>
          
          <a href ="index.html"> <img src="https://img.icons8.com/ios/50/000000/export.png" style="float: right;"></a></h1>
        </ul>
      </div>
      <div class="clearfix"> </div><!--avoid overflow outside the container-->
    </div>
  </div>

<div id="header2">

	<!--<div id="logo"><img src="logo.jpg"></div>-->
 <ul id="navbar">
  	<li><a href="admin.php">Home</a></li>
  	<li><a href="updatenotices.php"target="_blank">notices</a></li>
    <li><a href="playerscores.php"target="_blank">playerscores</a></li>
    <li><a href="addsport.php">addsports</a></li>
  	<li><a href="season.php"target="_blank">season</a></li>
    <li><a href="ranking.php"target="_blank">ranking</a></li>
    <li><a href="addteams.php"target="_blank">addteams</a></li>
    <li><a href="updatenews.php"target="_blank">newsupdate</a></li>
    <li><a href="fixture.php"target="_blank">fixture</a></li>
    <li><a href="addevent.php"target="_blank">addevent</a></li>

    
  </ul>
</div>
	<div id="sport">
	 <form  method="POST" action="admin_sportupdate.php" enctype="multipart/form-data">
 	<h2>Sports:</h2>
 	<p>Name of sport:</p>
 	<input type="text" name="sportname" id="sportname"class="inputs">
 	<p>Description:</p>
 	<textarea name="description" id="description"   ></textarea>
 	<p>Status:</p>
  	<select name="status" class="inputs">
  	<option value=""></option>
  	<option value="active">active</option>
  	<option value="inactive">inactive</option>
	</select>
	<center><input type="submit" value="Submit" class="myButton"></center>
</form>
</div>
</body>
<?php 
if (isset($_GET['status'])) {
if ($_GET['status']=='success') {?>

<script> alert("Updated Sucessfully");</script>  

<?php
}
if ($_GET['status']=='failed') {?>

  <script>alert("Error occurred");</script>  
  
  <?php
  }
}
?>