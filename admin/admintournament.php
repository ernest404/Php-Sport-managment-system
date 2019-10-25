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
  <div>
    <h4>Fixtures</h4> <a href="addfixture.php"><button style="margin-top: 2em;" class="myButton">AddFixture</button></a>
    <?php
  $query = "SELECT HomeTeam.teamname as TeamH, AwayTeam.teamname as TeamA, M.homescore, M.awayscore,M.date,M.time,HomeTeam.teamlogo as Hlogo,AwayTeam.teamlogo as Alogo from tbl_match as M join tbl_team as HomeTeam on M.hometeam = hometeam.id join tbl_team as AwayTeam on M.awayteam = awayteam.id order by date asc";
  $result = mysqli_query($conn,$query) or die('Query failed: ' . mysqli_error());

 while ($row = mysqli_fetch_assoc($result)): ?>
     <table class="table table-bordered table-striped">
       <tr><td style="width: 20%;"><?php echo $row['date']?></td><td style="width: 20%;"><?php echo $row['TeamH']?></td><td style="width: 20%;"><?php echo $row['homescore']?></td><td style="width: 20%;"><?php echo $row['awayscore']?></td><td style="width: 20%;"><?php echo $row['TeamA']?></td></tr>
</table>     
<?php
endwhile;
    ?>
</body>