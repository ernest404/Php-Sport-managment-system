<?php
include 'database.php';

$db = mysqli_select_db($conn,"sportsdb"); 

//faching all other records in your db.
$all_news_sql = "SELECT * FROM tbl_news"; 
$all_news_query = mysqli_query($conn,$all_news_sql); 
?>


<!DOCTYPE html>
<html>
<head>
	<title>News</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="styles.css" rel="stylesheet" type="text/css" media="all" />
<!-- //js -->
<link rel="stylesheet" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/all.css">

  <style>
      }
  .navbar-default .navbar-nav > li > a {
     color: white;text-align: center;font-family: cursive;
    font-size: 20px; padding-right:8vh;
    padding-left: 8vh;width: auto;
}
.card p,h3{
  font-size: 0.8em;
}
  </style>
</head>
<body class="body-news">

<div class="header">
    <div class="container">
      <div class="header-left">
         <a href="index.html"><i class="fas fa-home"></i> Sports News<span>Just Do it</span></a>
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
           <li><a href="football.php">Football</a></li>
           <li><a href="hockey.php">Hockey</a></li>
           <li><a href="basketball.php">Basketball</a></li>
           <li><a href="rugby.php">Rugby</a></li>
           <li><a href="gallery.html">gallery</a></li>
          <li><a href="venues.php">Venues</a></li>
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
 
	 

<div class="sidebar">
        <div class="sidebar-contents">

            <p><a href="https://www.nation.co.ke/">Sport Kenya</a></p>
            <p><a href="http://www.bbc.co.uk/news/world">World Sports</a></p>
            <p><a href="https://www.theguardian.com/news/datablog+technology/data-visualisation">Blogspot</a></p>

        </div>
</div>  
 <!-- Home Articles -->
 
  <section id="home-articles" class="py-2">
    <div class="container">
        <h2>Editor Picks</h2>
        <div class="articles-container">
          <?php while ($row = mysqli_fetch_assoc($all_news_query)): ?>
          <article class="card" style="max-height:auto; " >
           <img height="120" width="80" src="<?php echo $row['image']?>" />

            <div>
              <div class="category category-sports" style="font-size: 0.7em;"><?php echo $row['category']?></div>
              <h3>
              <a href="<?php
              $attrib = $row['id'];

              $dir = "article.php?";
                echo $path = $dir."attrib=".$attrib; 
              ?>"><?php echo $row['heading']?></a>
              </h3>
              <p style="font-size: 0.9em;" ><?php echo $row['shortcut_status']?></p>
              <p style="font-size: 0.9em;"><?php echo $row['date']?></p>
            </div>
          </article>
          <?php endwhile ?>
        </div>
      </div>
    </section>       

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
            <li><a href="tennis.php">Tennis</a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-grid">
          <h3 class="title">Information</h3>
           <ul>
            <li><a href="in">Coaches</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Archives</a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-grid">
          <h3 class="title">More details</h3>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms &amp; Conditions</a></li>
            <li><a href="#">location</a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-grid contact-grid">
            <h3 class="#contact">Contact us</h3>
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
          <li><a href="facebook.com" class="fb"></a></li>
          <li><a href="#"></a></li>
          <li><a href="gmail.com" class="gg"></a></li>
          <li><a href="pinterest.com" class="pn"></a></li>          
        </ul> 
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.js"> </script>
</body>
</html>