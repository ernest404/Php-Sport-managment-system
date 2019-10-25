<!DOCTYPE html>
<html>
<head>
<title>Sports Management System</title>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //js -->
<link rel="stylesheet" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/all.css">



<style type="text/css">
  *{
    font-size: 2.3vh !important;
  }
  .navbar-default .navbar-nav > li > a {
     color: white;text-align: center;font-family: cursive;
    font-size: 20px; padding-right:8vh;
    padding-left: 8vh;width: auto;
}
  
.wrapper1{
      display: grid;
      grid-template-columns: 3fr 1fr;
      grid-gap: 1em;
      grid-auto-rows:minmax(500px,auto);
      margin: 1em;
      grid-gap: 1em;
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
      grid-auto-rows:minmax(auto,auto);
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
#myContainer{
  margin-bottom: 2vh;
}


  </style>

</head>
	
<body>
<!-- header -->
	<div class="header">
    <a style="float: right; color: white;" href="admin/adminlogin.php">adminstator</a>
		<div class="container">
			<div class="header-left">
				 <a href="index.html"><i class="fas fa-home"></i> Home of Sports<span>Just Do it</span></a>
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
    <li><a href="news.php">News</a></li>
    <li><a href="gallery.html">gallery</a></li>
    <li><a href="venues.php">Venues</a></li>
					  </ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->
<div class="wrapper3">
   <div >
    <h5 style="text-align: center;font-size: 1.2rem;">Venues</h5>
    <?php
  $conn=mysqli_connect("localhost","root","","sportsdb");
  $venues_sql = "SELECT * FROM tbl_venue "; 
  $venues_query = mysqli_query($conn,$venues_sql);?>

          <?php while ($row = mysqli_fetch_assoc($venues_query)): ?>
          <div class="articles-container" style="height:280px; padding: 2em;border-radius: 5px; margin: 1em; word-wrap:normal; background-color: white;">
           <span  style="float:left; margin: 1em; "><img height="200" width="500" 
            src="<?php echo $row['image']?>"/></span>
            <center>
            <span style="margin: 1em;">
              <h3>
               Name : <?php echo $row['name']?>
              </h3></span>
              <p>Capacity : <?php echo $row['capacity']?></p>
              <p>Type : <?php echo $row['type']?></p>
            </center>
          </div>
          <?php endwhile ?>
  </div>
</body>
</html>