<?php
session_start();
if (!isset($_SESSION['login_user'])) {

  echo '<script>
  window.location.href = "adminlogin.php";
  </script>';
 
}
?>

<?php
  $conn=mysqli_connect("localhost","root","","sportsdb");?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="../fonts/font-awesome-4.3.0/css/font-awesome.min.css">
<!-- js -->
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/jquery.tabledit.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
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
          <form action="logout.php">
            <button style="float: right; margin-top: 2.5em; margin-left: 6em; margin-bottom: 2em;" class="myButton" type="submit">logout</button>
          </form>
        </ul>
      </div>
      <div class="clearfix"> </div><!--avoid overflow outside the container-->
    </div>
  </div>

<div id="header2">

  <!--<div id="logo"><img src="logo.jpg"></div>-->
 <ul id="navbar">
      <li><a href="admin.php">Home</a></li>
     <li><a href="adminplayers.php">players</a></li>
    <li><a href="adminsport.php">sport</a></li>
    <li><a href="adminteam.php">Teams</a></li>
     <li><a href="admintournament.php">Tournaments</a></li>
    <li><a href="addvenue.php">Venues</a></li>
    <li><a href="updatenotices.php">notices</a></li>
    <li><a href="addteams.php">addfaculty</a></li>
    <li><a href="updatenews.php">newsupdate</a></li>
    <li><a href="messages.php" class="notification"><i class="fa fa-envelope-o"> messages</i><span class="badge"><span><?php
  $query = "SELECT * FROM tbl_message";
  $result = mysqli_query($conn,$query) or die('Query failed: ' . mysqli_error());
  $result_length = mysqli_num_rows($result);
  echo $result_length;?></span></a></li>
</ul>
</div>

  <div class="table-responsive">
  <h4>Sports</h4>
  <table id="editable_table" class="table table-bordered table-striped">
 <tr>
  <th>#</th> 
  <th>Name</th> 
  <th>Status</th>
 </tr>
<?php
  $query = "SELECT * FROM tbl_sport";
  $result = mysqli_query($conn,$query) or die('Query failed: ' . mysqli_error());
  $result_length = mysqli_num_rows($result);
  for($i = 1; $i <= $result_length; $i++)
  {    
        $row = mysqli_fetch_array($result);//converts query results into array 
        echo "<tr><td>" .$i. "</td><td>" . $row["name"] . "</td><td>" . $row["status"] . "</td></tr>";
  }
echo "</table>";
?>
</table>
<center><a href="addsport.php"><button style="margin-top: 2em;" class="myButton">Add sport</button></a></center>
</div>

<div style="margin-top: 5em;">
  <h4>Faculty</h4>
  <table class="table table-bordered table-striped">
 <tr>
  <th>#</th> 
  <th>School</th> 
  <th>Year Founded</th>
 </tr>
<?php
  $conn=mysqli_connect("localhost","root","","sportsdb");
  $query = "SELECT * FROM tbl_team";
  $result = mysqli_query($conn,$query) or die('Query failed: ' . mysqli_error());
  $result_length = mysqli_num_rows($result);
  for($i = 1; $i <= $result_length; $i++)
  {    
        $row = mysqli_fetch_array($result); 
        echo "<tr><td>" .$i. "</td><td>" . $row["teamname"] . "</td><td>"
  . $row["year_founded"]. "</td></tr>";
  }
echo "</table>";
?>
</table>
<center><a href="addteams.php"><button style="margin-top: 2em;" class="myButton">Add Faculty</button></a></center>
</div>

  <h4>Sport Team</h4>
  <table class="table table-bordered table-striped">
 <tr>
  <th>#</th> 
  <th>Team</th> 
  <th>Sport</th>
 </tr>
<?php
  $conn=mysqli_connect("localhost","root","","sportsdb");
  $query = "SELECT teamname,name FROM sport_team,tbl_team,tbl_sport WHERE tbl_team.id = sport_team.team AND tbl_sport.Id =sport_team.sport ";
  $result = mysqli_query($conn,$query) or die('Query failed: ' . mysqli_error());
  $result_length = mysqli_num_rows($result);
  for($i = 1; $i <= $result_length; $i++)
  {    
        $row = mysqli_fetch_array($result); 
        echo "<tr><td>" .$i. "</td><td>" . $row["teamname"] . "</td><td>"
  . $row["name"]. "</td></tr>";
  }
echo "</table>";
?>
</table>
<center><a href="addsportteam.php"><button style="margin-top: 2em;" class="myButton">Add Sportteam</button></a></center>
</div>


</body>
</html>
<?php 
if (isset($_GET['status'])) {
if ($_GET['status']=='success') {?>

<script> alert("Login Sucessfully");</script>  
    
<?php
  }
}
?>