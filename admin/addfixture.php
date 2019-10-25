
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
    <li><a href="addsport.php"target="_blank">addsports</a></li>
  	<li><a href="season.php"target="_blank">season</a></li>
    <li><a href="ranking.php"target="_blank">ranking</a></li>
    <li><a href="addteams.php"target="_blank">addteams</a></li>
    <li><a href="updatenews.php"target="_blank">newsupdate</a></li>
    <li><a href="fixture.php">fixture</a></li>
    <li><a href="addevent.php"target="_blank">addevent</a></li>

    
  </ul>
</div>
	<div id="fixture">
	 <form  method="POST" action="admin_fixtureupdate.php" enctype="multipart/form-data">
 	
 	<h2> Fixtures:</h2>
   <p>Status:</p>
    <select name="status" class="inputs"required="">
    <option></option>
    <option value="played">played</option>
    <option value="coming-up">coming-up</option>
    <option value="suspended">suspended</option>
    <option value="postponed">postponed</option>
  </select>
  <p>Match Day:</p>
  <input type="number" min="1" name="gameweek" id="game_date"class="inputs" required="">
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

<p>Home team:</p>
  <?php
  $sql = "SELECT * FROM tbl_team";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    echo '<select name="team1" class="inputs" required>';
    echo '<option> </option>';
    while($row = $result->fetch_assoc()) {
    
        echo '<option value="'.$row["id"].'">'.$row["teamname"].'</option>';
    }
} else {
    echo "0 results";
}
?></select>

  <p>Away Team:</p>
  <?php
  $conn=mysqli_connect("localhost","root","","sportsdb");
  $sql = "SELECT * FROM tbl_team";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    echo '<select name="team2" class="inputs" required>';
    echo '<option> </option>';
    while($row = $result->fetch_assoc()) {
    
        echo '<option value="'.$row["id"].'">'.$row["teamname"].'</option>';
    }
} else {
    echo "0 results";
}
?>
   </select>
 	<p>Date:</p>
 	<input type="Date" name="gamedate" id="game_date"class="inputs" required="">
  <p>Kick off time:</p>
  <input type="time" name="gametime"  class="inputs" required="">
	<p>Home Score:</p>
	<input type="text" name="homescore" id="home_score"class="inputs" optional>
	<p>Away Score:</p>
	<input type="text" name="awayscore" id="away_score"class="inputs" optional>
	
 
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