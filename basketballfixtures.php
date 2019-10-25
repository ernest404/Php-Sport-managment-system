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
    font-family: cursive;
 }
.wrapper1{
      display: grid;
      grid-template-columns: 3fr 1fr;
      grid-gap: 1em;
      grid-auto-rows:minmax(500px,auto);
      margin: 1em;
    }
    .wrapper1>div{
      background: #ddd;
      padding: 1em;
    }
    .wrapper1>div:nth-child(odd){
      background: #ddd;
    }
    .wrapper1 h4{
      font-family: cursive;
      text-align: center;
    }

    .wrapper2{
      display: grid;
      grid-template-columns: 1fr 2fr 1fr;
      grid-gap: 1em;
      grid-auto-rows:minmax(500px,700px);
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
      grid-auto-rows:minmax(auto,500px);
      margin: 1em;
    }
    .wrapper3>div{
      background: #ddd;
      padding: 1em;
    }
    

    .nested1{

      display: grid;
      
      grid-gap: 1em;
      grid-auto-rows:minmax(100px,auto);

    }
    .nested1 a:hover,.nested1 a:focus{ color: green;}


    .nested1 div:hover,.nested1 div:focus{background:white; color: green;}

       .nested1 a{
      text-decoration: none;
    }
    
    .nested1 div:hover{
 transform: skew(10deg);
}
*{
  font-family: cursive;
}
body{ background-color: #ddd;
}

  </style>

</head>
<body>
 <div class="header">
    <div class="container">
      <div class="header-left">
        <a href=#><i class="fas fa-basketball-ball"></i>Basketball<span>Just Do it</span></a>
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
    <li><a href="news.php">News</a></li>
    <li><a href="basketballfixtures.php">Scores&Fixtures</a></li>
    <li><a href="basketballtable.php">Tables</a></li>
    <li><a href="#teamroaster">Team</a></li>
    <li><a href="#events.php">Tournaments</a></li>
    <li><a href="gallery.html">Gallery</a></li> 
    </ul>
          </div><!-- /.navbar-collapse -->
        </nav>
      </div>
    </div>
  </div>   

<center><h3>Basketball Scores & Fixtures</h3></center>

 <?php
  $query = "SELECT HomeTeam.teamname as TeamH, AwayTeam.teamname as TeamA, M.homescore, M.awayscore,M.date,M.time,HomeTeam.teamlogo as Hlogo,AwayTeam.teamlogo as Alogo from tbl_match as M join tbl_team as HomeTeam on M.hometeam = hometeam.id join tbl_team as AwayTeam on M.awayteam = awayteam.id WHERE  M.sport = '1' LIMIT 10";
  $result = mysqli_query($conn,$query) or die('Query failed: ' . mysqli_error());

   while ($row = mysqli_fetch_assoc($result)): ?>
     <main> 
   <div  style="align:center; padding-left:10px;border:1px; border-radius:5px;background-color:white;margin-top: 1em; height: 8em; margin-right: 12em; margin-left: 12em;">
     <table style="height: 8em;">

  <tbody>
    <tr></tr>
    <tr style="background-color: white;">

      <td width="16.66%"><center><img style="height: 30px;width: 30px; margin-left:15em;" src="<?php echo $row['Hlogo']?>"/></center></td>

      <td width="16.66%"><center><?php echo $row['TeamH']?></center></td>
      <td width="16.66%"><center>VS</center>  </td>
      <td width="16.66%"><center><?php echo $row['TeamA']?></center></td>
      <td width="16.66%"><center><img style="height: 30px;width: 30px; margin-right:15em; " src="<?php echo $row['Alogo']?>"/></center></td>
      
    </tr>
    <tr>
      <td width="16.66%"></td>
      <td width="16.66%" style="width: 30px;"><center> <?php echo $row['homescore']?></center></td>
      <td width="16.66%"><center><?php echo $row['time']?></center><br><center><?php echo $row['date']?></center> </td>
      <td style="width: 30px; "><center><?php echo $row['awayscore']?></center></td>
      <td width="16.66%"></td>
    </tr>
    <tr></tr>
  </tbody>
</table>     
<?php echo '</main>';

endwhile;
    ?>

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