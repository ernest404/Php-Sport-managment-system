<?php 
$conn=mysqli_connect("localhost","root","","sportsdb");?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="styles.css" rel="stylesheet" type="text/css" media="all" />
<!-- //js -->
<link rel="stylesheet" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/all.css">



<style type="text/css">
  *{
    font-size: 2.3vh !important;
  }
 .wrapper1{
      display: grid;
      grid-template-columns: 3fr 1fr;
      grid-gap: 1em;
      grid-auto-rows:minmax(500px,500px);
      margin: 1em;
    }
    .wrapper1>div{
      background: #ddd;
      padding: 1em;
    }
    .wrapper1>div:nth-child(odd){
      background: #ddd;
    }
    
    .wrapper2{
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      grid-gap: 1em;
      grid-auto-rows:minmax(500px,auto);
      margin: 1em;
    }
    .wrapper2>div{
      background: #ddd;
      padding: 1em;
    }
    .wrapper2>div:nth-child(odd){
      background: #ddd;
    }
    .wrapper2,.wrapper3 h4{
      font-family: cursive;
      text-align: center;
    }

    .wrapper3{
      display: grid;
      grid-template-columns:1fr;
      grid-gap: 1em;
      grid-auto-rows:minmax(500px,auto);
      margin: 1em;
    }
    .wrapper3>div{
      background: #ddd;
      padding: 1em;
    }

  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family:cursive;
   text-align: left;
     } 
  th {
   background-color: #3CB371;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
  ul img{

  }

</style>

</head>
<body>

   <div class="header">
    <div class="container">
      <div class="header-left">
         <a href="index.html"><i class="fas fa-futbol"></i> Football<span>Just Do it</span></a>
      </div>
      <div class="header-left1">
      <p><div class="social">
        <a href="http://facebook.com" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
        <a href="http://twitter.com" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
        <a href="http://instagram.com" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="http://youtube.com" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
      </div></p>  
      </div>
      <div class="header-right">
         <ul>
          <li><span>Sports Association</span></li>
          <li><a href="#contact" class="button">Contact Us</a></li>
        
        </ul>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
  <div class="header-nav">
    <div class="container" style="width: 100%;">
      <div class="header-nav-bottom">
        <nav class="navbar navbar-default" >
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
           <ul class="nav navbar-nav" style="width: 100%;">
    <li><a href="index.php">Home</a></li>
     <li><a href="footballfixtures.php">Fixtures</a></li>
     <li><a href="footballtable.php">Tables</a></li>
    <li><a href="news.php">News</a></li>
    <li><a href="#teamroaster">Team</a></li>
    <li><a href="#events.php">Tournaments</a></li>
    <li><a href="gallery.html">Gallery</a></li>    
</ul>
          </div><!-- /.navbar-collapse -->
        </nav>
      </div>
    </div>
  </div>
<center><h3>Football Players & Leagues</h3></center>
<div class="wrapper1">
  <div>
    <center><h4>League table</h4></center>
    <table class="table table-bordered table-striped">
 <tr>
  <th>Pos</th> 
  <th>Team</th>
  <th>P</th> 
  <th>W</th>
  <th>D</th>
  <th>L</th>
  <th>Pts</th>
 </tr>
<?php
  $query = "SELECT tbl_team.teamname,count(matchday) as played, count(if(tbl_team.id = tbl_match.awayteam AND tbl_match.awayscore > tbl_match.homescore,1,null)) + count(if(tbl_team.id = tbl_match.hometeam AND tbl_match.homescore > tbl_match.awayscore,1,null)) as win, count(if(tbl_match.awayscore = tbl_match.homescore,1,null)) as draw, count(if(tbl_team.id = tbl_match.hometeam AND tbl_match.homescore < tbl_match.awayscore,1,null)) + count(if(tbl_team.id = tbl_match.awayteam AND tbl_match.awayscore < tbl_match.homescore,1,null)) as lose, SUM(if(tbl_team.id = tbl_match.awayteam AND tbl_match.awayscore > tbl_match.homescore,3,0)) + SUM(if(tbl_team.id = tbl_match.hometeam AND tbl_match.homescore > tbl_match.awayscore,3,0)) +SUM(IF(tbl_match.awayscore = tbl_match.homescore,1,0)) + 0 AS points FROM tbl_match  INNER JOIN tbl_team ON tbl_team.id= tbl_match.hometeam OR tbl_team.id= tbl_match.awayteam WHERE tbl_match.sport='2' AND tbl_match.status = 'played' GROUP BY tbl_team.teamname ORDER BY points DESC";
   $result = mysqli_query($conn,$query) or die('Query failed: ' . mysqli_error());
  $result_length = mysqli_num_rows($result);
  for($i = 1; $i <= $result_length; $i++)
  {    
        $row = mysqli_fetch_array($result); 
        echo "<tr><td>" .$i. "</td><td>" . $row["teamname"] . "</td><td>" . $row["played"] . "</td><td>" . $row["win"] . "</td><td>" . $row["draw"] . "</td><td>" . $row["lose"] . "</td><td>" . $row["points"] . "</td> </tr>";
  }
echo "</table>";
?>
</table>
  </div>

  <div>
    <center><h4>Top Scorers</h4></center>
    <table class="table table-bordered table-striped">
 <tr>
  <th>Rank</th> 
  <th>Name</th> 
  <th>Goals</th>
 </tr>
<?php
  $query = "SELECT * FROM tbl_scorers INNER JOIN tbl_teamroaster ON tbl_scorers.name=tbl_teamroaster.ID WHERE tbl_teamroaster.sport = '2' ORDER by score DESC, ts ASC LIMIT 10";
  $result = mysqli_query($conn,$query) or die('Query failed: ' . mysqli_error());
  $result_length = mysqli_num_rows($result);
  for($i = 1; $i <= $result_length; $i++)
  {    
        $row = mysqli_fetch_array($result); 
        echo "<tr><td>" .$i. "</td><td>" . $row["fname"] . "</td><td>"
  . $row["score"]. "</td></tr>";
  }
echo "</table>";
?>
</table>
  </div>

</div>
<!--footer-->
<div class="footer">  
    <div class="container">
      <div class="footer-grids">
        <div class="col-md-3 footer-grid">
          <h3 class="title">Sports</h3>
          <ul>
            <li><a href="football.php">Football</a></li>
            <li><a href="basketball.php">Basketball</a></li>
            <li><a href="rugby.php">Rugby</a></li>
            <li><a href="tennis.php">Hockey</a></li>
            <li><a href="athletics.php">Athletics</a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-grid">
          <h3 class="title">Information</h3>
           <ul>
            <li><a href="information.php">Coaches</a></li>
            <li><a href="information.php">Testimonials</a></li>
            <li><a href="information.php">Archives</a></li>
            <li><a href="information.php">Our Team</a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-grid">
          <h3 class="title">More details</h3>
          <ul>
            <li><a href="information.php">About us</a></li>
            <li><a href="information.php">Privacy Policy</a></li>
            <li><a href="information.php">Terms &amp; Conditions</a></li>
            <li><a href="information.php">location</a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-grid contact-grid">
            <h3 class="title">Contact us</h3>
            <ul>
              <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Moi university Main campus</li>              
              <li class="adrs">Pavilion</li>
              <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+254703749516</li>
              <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:example@mail.com">ernestmuisyoo@gmail.com</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <div class="copy">
    <div class="container">
      <div class="copy-left">
        <p>© 2019. All rights reserved | Design by <a href="#">Dark army</a></p>
      </div>
      <div class="social-icons">
        <ul>
          <li><a href="#" class="fb"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#" class="gg"></a></li>
          <li><a href="#" class="pn"></a></li>          
        </ul> 
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.js"> </script>

</body>
</html>