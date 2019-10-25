<?php
$conn=mysqli_connect("localhost","root","","sportsdb");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Rugby</title>
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
<body >

   <div class="header">
    <div class="container">
      <div class="header-left">
         <a href="#"><i class="fas fa-football-ball"></i>Rugby<span>Just Do it</span></a>
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
    <li><a href="rugbyfixtures.php">Scores&Fixtures</a></li>
    <li><a href="rugbytable.php">Tables</a></li>
    <li><a href="#teamroaster">Team</a></li>
    <li><a href="#events.php">Tournaments</a></li>
    <li><a href="gallery.html">Gallery</a></li>    
     </ul>
          </div><!-- /.navbar-collapse -->
        </nav>
      </div>
    </div>
  </div>
<!-- //header -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="container">
            <div class="carousel-caption">
              <h3>Football</h3>
              <p>The contemporary history of the world favorite game spans more than 100 years. It all began in 1863 in England, when rugby football and association football branched off on their different courses and the Football Association in England was formed - becoming the sport first governing body.</p>

            </div>
          </div>
        </div>
        <div class="item item2">
          <div class="container">
            <div class="carousel-caption">
              <h3>Basketball</h3>
              <p>Dr. James Naismith is known world-wide as the inventor of basketball. He was born in 1861 in Ramsay township, near Almonte, Ontario, Canada. The concept of basketball was born out of his early school days when he played a simple game known as duck-on-a-rock outside his schoolhouse.</p>
            </div>
          </div>
        </div>
        <div class="item item3">
          <div class="container">
            <div class="carousel-caption">
              <h3>Hockey</h3>
               <p>Hockey-like games involving sticks and balls have been played for thousands of years. Historical records show that a crude form of hockey was played in Egypt 4,000 years ago, and in Ethiopia around 1,000 BC</p>

            </div>
          </div>
        </div>
        <div class="item item4">
          <div class="container">
            <div class="carousel-caption">
              <h5>Rugby</h5>
              <p>It is claimed that William Webb Ellis, a pupil at Rugby School, picked up the ball and invented rugby. ... This change effectively started the evolution of the modern game of American football away from its rugby origins. 1883.</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
      <!-- The Modal -->
    </div>
<section style="margin-top: 1em;" >
  <div class="wrapper1">
<div >
  <h4>News</h4>
<?php

$news_sql = "SELECT * FROM tbl_news WHERE category= 'Rugby' LIMIT 3"; 
$news_query = mysqli_query($conn,$news_sql); 

?>

        <div class="articles-container" style=" margin: 1em; display: flex; flex-flow: row wrap;">
          <?php while ($row = mysqli_fetch_assoc($news_query)): ?>
          <article class="card" style="height:400px; width: 31.8%;margin: 6px;" >
           <img height="120" width="50" src="<?php echo $row['image']?>"/>
            <div>
    
              <h3>
                <a href="article.html"><?php echo $row['heading']?></a>
              </h3>
              <p  ><?php echo $row['shortcut_status']?></p>
              
            </div>
          </article>
          <?php endwhile ?>
        </div>
      </div>
<div> 
 <h4>League Table</h4>

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
   $query = "SELECT tbl_team.teamname,count(matchday) as played, count(if(tbl_team.id = tbl_match.awayteam AND tbl_match.awayscore > tbl_match.homescore,1,null)) + count(if(tbl_team.id = tbl_match.hometeam AND tbl_match.homescore > tbl_match.awayscore,1,null)) as win, count(if(tbl_match.awayscore = tbl_match.homescore,1,null)) as draw, count(if(tbl_team.id = tbl_match.hometeam AND tbl_match.homescore < tbl_match.awayscore,1,null)) + count(if(tbl_team.id = tbl_match.awayteam AND tbl_match.awayscore < tbl_match.homescore,1,null)) as lose,

  SUM(if(tbl_team.id = tbl_match.awayteam AND tbl_match.awayscore > tbl_match.homescore,awayscore,0)) +
  SUM(if(tbl_team.id = tbl_match.hometeam AND tbl_match.homescore > tbl_match.awayscore,homescore,0)) + SUM(if(tbl_team.id = tbl_match.awayteam AND tbl_match.awayscore < tbl_match.homescore,awayscore,0)) + SUM(if(tbl_team.id = tbl_match.hometeam AND tbl_match.awayscore > tbl_match.homescore,homescore,0)) + SUM(IF(tbl_team.id = tbl_match.awayteam AND tbl_match.awayscore = tbl_match.homescore,awayscore,0))+SUM(IF(tbl_team.id = tbl_match.hometeam AND tbl_match.awayscore = tbl_match.homescore,homescore,0)) AS points FROM tbl_match  INNER JOIN tbl_team ON tbl_team.id= tbl_match.hometeam OR tbl_team.id= tbl_match.awayteam WHERE tbl_match.sport='4' AND tbl_match.status = 'played' GROUP BY tbl_team.teamname ORDER BY points DESC";
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

</div>


</section>
<!--Team roster-->
 <form action="" method="POST">
  <p>Select team:</p>
  <?php
  $conn=mysqli_connect("localhost","root","","sportsdb");
  $sql = "SELECT * FROM tbl_team";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    echo '<select name="team" class="inputs" required>';
    echo '<option> </option>';
    while($row = $result->fetch_assoc()) {
    
        echo '<option value="'.$row["id"].'">'.$row["teamname"].'</option>';
    }
} else {
    echo "0 results";
}
?>
   </select>
   <input type="submit" value="Submit" class="myButton">
  </form>
<?php
$teamname=$_POST['team']; 

$roaster_sql = "SELECT dp,fname,sname,Position ,DOB,TIMESTAMPDIFF(YEAR,DOB,curdate()) as age FROM tbl_teamroaster WHERE sport= '4'AND team = $teamname LIMIT 16 "; 

$TN="SELECT teamname FROM tbl_team WHERE id =$teamname";
$TN_query= mysqli_query($conn,$TN);
$row2 = mysqli_fetch_assoc($TN_query);
$roaster_query = mysqli_query($conn,$roaster_sql); 

?>
<div class="wrapper3">
  <div id="teamroaster">
 <h4><?php echo $row2['teamname']."\t" ?>Team Roster</h4>
        <div style=" margin: 1em; display: flex; flex-flow: row wrap;justify-content: space-around;"> 
          
          <?php while ($row = mysqli_fetch_assoc($roaster_query)): ?>
          <div class="card" style="height:170px; width: 10.8%; margin-top: 2em;margin-bottom: 2em ; margin-left: 6px; margin-right: 6px; border-radius: 10px;" >
           <img style="padding:2px;" src="<?php echo $row['dp']?>"/>

              <footer style=" background-color: #3CB371; color: white; width:100%;">
                <h3>
               <p style="font-size:0.7em !important; margin-bottom: 0px;"><?php echo $row['fname']."\t"?> <?php echo $row['sname']?></p>
              </h3>
              <p style="font-size:0.7em !important;margin-bottom: 0px;" ><?php echo $row['Position']?></p>
              <p style="font-size:0.7em !important;margin-bottom: 0px;" >Age:<?php echo" " .$row['age']?></p>
              
            </footer>
          </div>
          <?php endwhile ?>
        </div>
      </div>
    </div>
<div class="wrapper2">
  <div>
    <h4>Last Match</h4>
    <?php
  $query = "SELECT HomeTeam.teamname as TeamH, AwayTeam.teamname as TeamA, M.homescore, M.awayscore,M.date,M.time,HomeTeam.teamlogo as Hlogo,AwayTeam.teamlogo as Alogo from tbl_match as M join tbl_team as HomeTeam on M.hometeam = hometeam.id join tbl_team as AwayTeam on M.awayteam = awayteam.id WHERE M.status='played' AND M.sport = '4' LIMIT 3";
  $result = mysqli_query($conn,$query) or die('Query failed: ' . mysqli_error());

 while ($row = mysqli_fetch_assoc($result)): ?>
     <main style=" ">
    <div  style="align:center; box-shadow: 10px 10px 5px #888888; padding-left:10px;border:1px; border-radius:5px;background-color:white;margin-top: 2em; height: 8em;">
     <table style="height: 8em;">
  <tbody>
    <tr></tr>
    <tr style="background-color: white;">

      <td><img style="height: 30px;width: 30px;" src="<?php echo $row['Hlogo']?>"/></td>

      <td><span><?php echo $row['TeamH']?></span></td>
      <td style="width: 30px;"><center> <?php echo $row['homescore']?></span></td>
      <td ><center><?php echo $row['time']?></center> </td>
    </tr>
    <tr>
      <td><img style="height: 30px;width: 30px;" src="<?php echo $row['Alogo']?>"/></td>
      <td><span><?php echo $row['TeamA']?></span></td>
      <td style="width: 30px; "><center><?php echo $row['awayscore']?></center></td>
      <td ><center><?php echo $row['date']?></center></td>
    </tr>
    <tr></tr>
  </tbody>
</table>     
<?php echo '</main>';

endwhile;
    ?>
</div>

  <div>
    <h4>Next Match</h4>

    <?php
  $query = "SELECT HomeTeam.teamname as TeamH, AwayTeam.teamname as TeamA, M.homescore, M.awayscore,M.date,M.time,HomeTeam.teamlogo as Hlogo,AwayTeam.teamlogo as Alogo from tbl_match as M join tbl_team as HomeTeam on M.hometeam = hometeam.id join tbl_team as AwayTeam on M.awayteam = awayteam.id WHERE M.status='coming-up' AND M.sport = '4' LIMIT 3";
  $result = mysqli_query($conn,$query) or die('Query failed: ' . mysqli_error());

 while ($row = mysqli_fetch_assoc($result)): ?>
     <main>
    <div style="align:center; box-shadow: 10px 10px 5px #888888; padding-left:10px;border:1px; border-radius:5px;background-color:white;margin-top: 2em; height: 8em;">
     <table style="height: 8em;">
  <tbody>
    <tr></tr>
    <tr style="background-color: white;">

      <td><img style="height: 30px;width: 30px;" src="<?php echo $row['Hlogo']?>"/></td>

      <td><span><?php echo $row['TeamH']?></span></td>
      <td style="width: 30px;"><center> - </center></td>
      <td ><center><?php echo $row['time']?></center> </td>
    </tr>
    <tr>
      <td><img style="height: 30px;width: 30px;" src="<?php echo $row['Alogo']?>"/></td>
      <td><span><?php echo $row['TeamA']?></span></td>
      <td style="width: 30px;"><center>-</center></td>
      <td ><center><?php echo $row['date']?></center></td>
    </tr>
    <tr></tr>
  </tbody>
</table>      
<?php echo '</main>';
endwhile;
    ?>


  </div>
  
  <div>
  <h4>Top scorer</h4>
  <table class="table table-bordered table-striped">
 <tr>
  <th>Rank</th> 
  <th>Name</th> 
  <th>Trys</th>
 </tr>
<?php
  $query = "SELECT * FROM tbl_scorers INNER JOIN tbl_teamroaster ON tbl_scorers.name=tbl_teamroaster.ID WHERE tbl_teamroaster.sport = '4' ORDER by score DESC, ts ASC LIMIT 10";
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
</div>
<div class="wrapper3" >
  <div style="background: white;">
    <h4 style="margin-bottom: 5em;">Our Official Partners</h4>
<div style=" margin: 1em; display: flex; flex-flow: row wrap; justify-content: space-around;"> 
  
    <div><img src="Images\logos\huawei.jpg" height="64" width="32"></div>
    <div><img src="Images\logos\nike.webp" height="64" width="32"></div>  
    <div><img src="Images\logos\sure.webp" height="64" width="32"></div>
    <div><img src="Images\logos\internetsociety.png" height="64" width="32"></div>
    <div><img src="Images\logos\saf.png" height="64" width="32"></div>
    <div><img src="Images\logos\ibm.jpg" height="64" width="32"></div></div>
<div style=" margin-top: 5em; display: flex; flex-flow: row wrap; justify-content: space-around;">    
    <div><img src="Images\logos\ericsson.webp" height="64" width="32"></div>
    <div><img src="Images\logos\hublot.webp" height="64" width="32"></div>
    <div><img src="Images\logos\vitality.webp" height="64" width="32"></div>
    <div><img src="Images\logos\EFAC.jpg" height="64" width="32"></div>
    <div><img src="Images\logos\millennium.webp" height="64" width="32"></div>
    <div><img src="Images\logos\hyundai.webp" height="64" width="32"></div>
          
</div>
  </div>
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

</body>
</html>