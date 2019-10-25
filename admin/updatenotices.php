<?php
 include 'database.php';?>
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

<div>
 <form method="post" action="admin_notice_update.php" enctype="multipart/form-data">
 <h2>UPDATE NOTICES</h2>
<h4>Category:</h4>
<?php
$conn=mysqli_connect("localhost","root","","sportsdb");
$sql = "SELECT * FROM tbl_sport";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  echo '<select name="category" class="inputs">
        <option>    </option>                                      ';
    while($row = $result->fetch_assoc()) {
		
        echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
    }
} else {
    echo "0 results";
}
?>
</select>
 <h4 class="fix form_h4">Notice   :</h4>
 <textarea name="notice" cols="40" rows="8" ></textarea>
 <center><input type="submit" value="Submit" class="myButton"></center>	
 </form>
 </div>
</body>