<?php
session_start();
if (!isset($_SESSION['login_user'])) {

  echo '<script>
  window.location.href = "adminlogin.php";
  </script>';
 
}

?>
<?php
include 'database.php'; ?>
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

<div id="news">
 <h2>ADD VENUES</h2>
 <form method="post" action="admin_addvenue.php" enctype="multipart/form-data">
 <h4 class="fix form_h4">Venue name  :</h4>
 <input type="text" name="name" class="inputs"/> 
 
 <h4 class="fix form_h4">Picture  :</h4>
 <input type="file" name="image" placeholder="No image selected" style="margin-bottom: 2em;">

<h4>Category:</h4>
<?php
$conn=mysqli_connect("localhost","root","","sportsdb");
$sql = "SELECT * FROM tbl_sport";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  echo '<select name="category" class="inputs">';
  echo "<option> </option>";
    while($row = $result->fetch_assoc()) {
    
        echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
    }
} else {
    echo "0 results";
}
?>
  </select>
Type:<select name="type" required class="inputs">
  <option> </option>
  <option value="indoor">Indoor</option>
  <option value="outoor">Outdoor</option>
</select><br><br>
Capacity:                                                                      
<input type="text" name="capacity" required class="inputs"><br><br>
 
<center><input type="submit" value="Submit" class="myButton"></center>


</form>
</div>
</body>
</html>
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