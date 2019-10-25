<?php
session_start();
if (!isset($_SESSION['login_user'])) {

  echo '<script>
  window.location.href = "adminlogin.php";
  </script>';
 
}

?>
<?php 
if (isset($_GET['status'])) {
if ($_GET['status']=='success') {?>

<script> alert("Updated Sucessfully");</script>  

<?php
}
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
    <li><a href="messages.php">messages</a></li>
</ul>
</div>
 
 <div class="table-responsive">
  <h4>Sports</h4>
  <table id="editable_table" class="table table-bordered table-striped">
 <tr>
  <th colspan="1">#</th> 
  <th>Name</th> 
  <th>Email</th>
  <th>Message</th>
  <th>Time</th>
  <th>Date</th>
 </tr>
<?php
  $query = "SELECT * FROM tbl_message";
  $result = mysqli_query($conn,$query) or die('Query failed: ' . mysqli_error());
  $result_length = mysqli_num_rows($result);
  for($i = 1; $i <= $result_length; $i++)
  {    
        $row = mysqli_fetch_array($result);//converts query results into array 
        echo "<tr><td>" .$i. "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["message"] . "</td><td>" . $row["time"] . "</td><td>" . $row["date"] . "</td></tr>";
  }
echo "</table>";
?>
</table>
</div>
</body>