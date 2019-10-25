<?php
session_start();
if (!isset($_SESSION['login_user'])) {

  echo '<script>
  window.location.href = "adminlogin.php";
  </script>';
 
}
include 'database.php';?>

?>
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
    <li><a href="addsport.php"target="_blank">addsports</a></li>
  	<li><a href="season.php"target="_blank">season</a></li>
    <li><a href="ranking.php">ranking</a></li>
    <li><a href="addteams.php"target="_blank">addteams</a></li>
    <li><a href="updatenews.php"target="_blank">newsupdate</a></li>
    <li><a href="fixture.php"target="_blank">fixture</a></li>
    <li><a href="addevent.php"target="_blank">addevent</a></li>

    
  </ul>

 <div id="addplayers">
	 <form  method="POST" action="admin_addplayers.php" enctype="multipart/form-data">
 	<h2> Add Players</h2>
 	<p>First name:</p>
 	<input type="text" name="fname" id="season_id"class="inputs" required >
  <p>Second name:</p>
  <input type="text" name="sname" id="season_id"class="inputs" required >
  <p>Date of birth:</p>
  <input type="Date" name="dob" id="season_id"class="inputs" required >
  <p>Profile picture:</p>
  <input type="file" name="image" placeholder="No image selected" style="margin-bottom: 2em;">
  <p>Sport Category:</p>
  <?php
  $sql = "SELECT * FROM tbl_sport WHERE status='active' ";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    echo '<select name="sport" class="inputs" required>';
     echo '<option> </option>';
    while($row = $result->fetch_assoc()) {
    
        echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
    }
} else {
    echo "0 results";
}
?></select>
<p>Faculty:</p>
  <?php
  $sql = "SELECT * FROM tbl_team";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    echo '<select name="team" class="inputs" required>';
    echo '<option> </option>';
    while($row = $result->fetch_assoc()) {
    
        echo '<option value="'.$row["id"].'">'.$row["teamname"].'</option>';
    }
} else {
    echo "0 results";
}
?>
   </select>
 	<p>Position:</p>
 	<input type="text" name="position" id="played"class="inputs" required>
 	<p>Country:</p>
   <select name="country" class="inputs">
     <option></option>
     <option>Kenya</option>
     <option>International</option>
   </select>
 	<center><input type="submit" value="Submit" class="myButton" required=""></center>
     </form >
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