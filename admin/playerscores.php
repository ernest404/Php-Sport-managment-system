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
<style >
  .result{
        position: absolute;
        z-index: 999;
        top: 100%;
        left: 0;
    }
 .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
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
    <li><a href="messages.php" class="notification">messages<span class="badge"><span><?php
  $query = "SELECT * FROM tbl_message";
  $result = mysqli_query($conn,$query) or die('Query failed: ' . mysqli_error());
  $result_length = mysqli_num_rows($result);
  echo $result_length;?></span></a></li>
</ul>
</div>

<div id="playerscores">
<form action="admin_playerscores.php" method="POST" enctype="multipart/form-data">
<h2>PLayers scores</h2>


<p>Enter player name:</p>
  <?php
  $conn=mysqli_connect("localhost","root","","sportsdb");
  $sql = "SELECT * FROM tbl_teamroaster order by fname asc ";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    echo '<select name="playername" class="inputs" required>';
     echo '<option> </option>';
    while($row = $result->fetch_assoc()) {
    
        echo '<option value="'.$row["ID"].'">'.$row['fname']."\t".$row['sname'].'</option>';
    }
} else {
    echo "0 results";
}
?>
</select>
<p>Score:</p>
<input type="text" name="score" class="inputs"><br>
<center><input type="submit" value="Submit" class="myButton"></center>
</form >
</div>
</body>