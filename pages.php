<!DOCTYPE html>
<html>
<head>
	<title>articles</title>
</head>
<body>
<?php
$conn=mysqli_connect("localhost","root","","sportsdb");

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
</body>
</html>