<?php
include 'database.php';
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
    <li><a href="ranking.php"target="_blank">ranking</a></li>
    <li><a href="addteams.php"target="_blank">addteams</a></li>
    <li><a href="updatenews.php"target="_blank">newsupdate</a></li>
    <li><a href="fixture.php"target="_blank">fixture</a></li>
    <li><a href="addevent.php">addevent</a></li>

    
  </ul>
</div>

<div id="Events">
 <center> <h1>Edit Events</h1></center>                          
 <form action="adminupdateevent.php" method="post">
Category:
<?php
$sql = "SELECT * FROM tbl_sports";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  echo '<select name="ename" class="smalltext">';
    while($row = $result->fetch_assoc()) {
		
        echo '<option value="'.$row["name"].'">'.$row["name"].'</option>';
    }
} else {
    echo "0 results";
}
echo "</select>";
?>
</select>
Type:<select name="type" required class="smalltext">
  <option value="indoor">Indoor</option>
  <option value="outoor">Outdoor</option>
</select><br><br>
Description:                                                                      
<input type="text" name="description" required class="bigtext"><br><br>
  Start Date:  
<input type="date" name="start_date" required class="smalltext">
  End Date:  
<input type="date" name="end_date" required class="smalltext"><br><br>
Event Time:  
<input type="time" name="time" required class="smalltext"><br>
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