
<!DOCTYPE html>
<html>
<head>
	<title>University sports</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">s
  <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
 <link rel="stylesheet" type="text/css" href="js/popper.min.js">
 <link rel="stylesheet" type="text/css" href="js/jquery-3.3.1.min.js">
  <link rel="stylesheet" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style type="text/css">
  *{
    font-family: cursive;
  }
  #navbar>li{width:12.5%;}

  .carousel-item{

  width: 100%;
  height: 60%;
  opacity: 0.9;
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


/*image holder*/

.slide-holder {
  padding: 0 0 0 65px; }
  .slide-holder .img-slide {
    position: relative;
    margin: 0 0 -140px; }
    .slide-holder .img-slide img {
      position:relative;
      top: 25px;
      left: 0px;
      margin-bottom: -25px; }

.visual-list {
  margin: 0 -25px -40px -15px;
  padding: 28px 0;
  list-style: none;
  color: #848e97; }
  .visual-list .img-holder {
    float: left;
    width: 90px;
    text-align: center;
    margin: 7px 45px 0 0; }
    .visual-list .img-holder img {
      vertical-align: top; }
  .visual-list .text-holder {
    overflow: hidden; }
  .visual-list li {
    padding: 0 0 29px; }
  .visual-list h3 {
    margin: 0 0 10px;
    font-size: 1.6rem;
    line-height: 1.5;
    font-weight: bold;
    color: #333; }
  .visual-list p {
    margin: 0 0 21px; }
    .MainContainer{
      margin-bottom: 2vh;
    }
  </style>

</head>
<body>
  <div class="header1">
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
      <div class="clearfix"> </div><!--avoid overflow outside the container-->
    </div>
  </div>
<nav class="navbar navbar-inverse">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
   <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
<div class="container-fluid">
<div class="navbar-header">
 <ul class="nav navbar-nav" style="margin-bottom:0px">
  	<li><a style="color: white;" href="#">Home</a></li>
  	<li><a href="football.php">Football</a></li>
    <li><a href="hockey.php">Hockey</a></li>
    <li><a href="basketball.php">Basketball</a></li>
    <li><a href="rugby.php">Rugby</a></li>
    <li><a href="news.php">News</a></li>
    <li><a href="gallery.html">gallery</a></li>
    <li><a href="admin/adminlogin.php">Admin</a></li>
    </ul>
</div>
</div>
</nav>
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Images\1.jpg" alt="First slide" height="500">
      <div class="carousel-caption d-none d-md-block">
    <h5>Football</h5>
    <p>The contemporary history of the world favorite game spans more than 100 years. It all began in 1863 in England, when rugby football and association football branched off on their different courses and the Football Association in England was formed - becoming the sport first governing body.</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Images\2.jpg" alt="Second slide"height="500">
      <div class="carousel-caption d-none d-md-block">
    <h5>Basketball</h5>
    <p>Dr. James Naismith is known world-wide as the inventor of basketball. He was born in 1861 in Ramsay township, near Almonte, Ontario, Canada. The concept of basketball was born out of his early school days when he played a simple game known as duck-on-a-rock outside his schoolhouse.</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Images\4.jpg" alt="Third slide"height="500">
      <div class="carousel-caption d-none d-md-block">
    <h5>Hockey</h5>
    <p>Hockey-like games involving sticks and balls have been played for thousands of years. Historical records show that a crude form of hockey was played in Egypt 4,000 years ago, and in Ethiopia around 1,000 BC</p>
  </div>
    </div>
  <div class="carousel-item">
      <img class="d-block w-100" src="Images\3.jpg" alt="Third slide"height="500">
      <div class="carousel-caption d-none d-md-block">
    <h5>Rugby</h5>
    <p>It is claimed that William Webb Ellis, a pupil at Rugby School, picked up the ball and invented rugby. ... This change effectively started the evolution of the modern game of American football away from its rugby origins. 1883.</p>
  </div>
    </div>  

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
   
<section style="margin-top: 10px;" > 
<div class="wrapper1">
   <div >
    <h5 style="text-align: center;font-size: 1.2rem;">What's trending</h5>
    <?php
  $conn=mysqli_connect("localhost","root","","sportsdb");
  $all_news_sql = "SELECT * FROM tbl_news LIMIT 2"; 
  $all_news_query = mysqli_query($conn,$all_news_sql);?>

          <?php while ($row = mysqli_fetch_assoc($all_news_query)): ?>
          <article class="articles-container" style="height:auto;padding: 2em;border-radius: 5px; margin: 1em; word-wrap:normal; background-color: white;">
           <span  style="float: left; margin: 1em; "><img height="140" width="90" src="<?php echo $row['image']?>" /></span>
            <span style="margin: 1em;">
              <h3>
                <a href="article.html" style="text-decoration: none; color:#3CB371 "><?php echo $row['heading']?></a>
              </h3></span>
              <p><?php echo $row['shortcut_status']?></p>
              <p><?php echo $row['date']?></p>
          
          </article>
          <?php endwhile ?>
  </div>
  
  <div>
    <h5>Upcoming Events</h5>
<?php
  $query = "SELECT * FROM tbl_event ORDER BY start_date asc LIMIT 3";
  $result = mysqli_query($conn,$query) or die('Query failed: ' . mysqli_error());
  $result_length = mysqli_num_rows($result);
  for($i = 1; $i <= $result_length; $i++)
  {    echo '<main id="myContainer" class="MainContainer"style="font-size: 0.9rem;">';
    echo '<div style="align:center; box-shadow: 10px 10px 5px #888888; padding-left:10px;border:1px; border-radius:5px;background-color:#3CB371">';
        $row = mysqli_fetch_array($result); 
       echo "<br><b>Event Name: </b>" . $row["sport_event"]."<br> <b>Type: </b>" . $row["type"]. "<br> <b>Description:</b> " . $row["description"]."<br><b> Registration Last Date: </b>" . $row["end_date"]."<br><b> Timing:</b> " . $row["time"];
  
  echo '<input type="hidden" name="event" value='.$row["sport_event"].'><input type="hidden" name="type" value='.$row["type"].'>';
      
  
echo '</main>';
  }
echo "</table>";
?>
  </div>


</div>


  <div class="wrapper3" style="height: auto;">
   <div>
    <h5>Anouncements</h5>
    <?php
  $query = "SELECT * FROM tbl_notices ORDER by noticedate DESC LIMIT 6";
  $result = mysqli_query($conn,$query) or die('Query failed: ' . mysqli_error());
  $result_length = mysqli_num_rows($result);
  for($i = 1; $i <= $result_length; $i++)
  {    
        $row = mysqli_fetch_array($result); 

        echo "<tr ><td>" .$i . " </td><td>" . $row["notice"] . "</td><br><td>"
  . $row["noticedate"]. "</td></tr><br><br>";
  }
echo "</table>";
?>
  </div>
</div>



<section class="area" style="background:#ddd;font-family: cursive;font-size: 14px;line-height: 1.42857143;font-weight: normal;pa ">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <ul class="visual-list">
            <li>
              <div class="img-holder">
                <img src="Images/baskett.jpeg" height="71" width="100" alt="">
              </div>
              <div class="text-holder">
                <h3>Basketball</h3>
                <p>A Brief History Of Basketball. Dr. James Naismith is known world-wide as the inventor of basketball. He was born in 1861 in Ramsay township, near Almonte, Ontario, Canada. </p>
              </div>
            </li>
            <li>
              <div class="img-holder">
                <img class="pull-left" src="Images/hockey.jpeg" height="71" width="100" alt="">
              </div>
              <div class="text-holder">
                <h3>Hockey</h3>
                <p>Hockey-like games involving sticks and balls have been played for thousands of years. Historical records show that a crude form of hockey was played in Egypt 4,000 years ago,</p>
              </div>
            </li>
            <li>
              <div class="img-holder">
                <img src="Images/rugby2.jpg" height="71" width="100" alt="">
              </div>
              <div class="text-holder">
                <h3>Rugby</h3>
                <p>History of rugby. Rugby is said to have originated at Rugby School in Warwickshire, England, in 1823 when during a game of football.</p>
              </div>
            </li>
            <li>
              <div class="img-holder">
                <img src="Images/football.jpg" height="71" width="100" alt="">
              </div>
              <div class="text-holder">
                <h3>Football</h3>
                <p>The contemporary history of the world favorite game spans more than 100 years. It all began in 1863 in England.</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-7">
          <div class="slide-holder">
            <div class="img-slide scroll-trigger"><img src="images/rugby-team.jpg" height="624" width="684" alt=""></div>
          </div>
        </div>
      </div>
    </div>
  </section>s
<!-- contact -->
  <div id="contact" class="contact">
  <div class="container">
    <h3>Contact Us</h3>
    <p class="ever">Feel free to talk to us.</p>
    <div class="contact-us1-bottom">
      <form action="actioncontactus.php" method="POST" >
        <input style="margin-right: 10px;" type="text" value="Name" name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
        <input type="email" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
        <textarea type="text" name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
        <input type="submit" value="Submit" >
      </form>

      <div class="home-radio-clock">
        <ul>
          <li><i class="glyphicon glyphicon-home" aria-hidden="true"></i>Our Home</li>
          <li><i class="glyphicon glyphicon-bullhorn" aria-hidden="true"></i>Call Us</li>
          <li><i class="glyphicon glyphicon-time" aria-hidden="true"></i>Opening Time</li>
        </ul>
      </div>
      <div class="home-radio-clock-right">
        <ul>
          <li>Moi university Pavilion
            <span>Eldoret</span></li>
          <li class="lst"><a href="tel:+254712345678">+254712345678</a></li>
          <li> <span>Mon-Fri:</span><span>08h-17h</span></li>
        </ul>
      </div>
      <div class="clearfix"> </div>
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

</body>
</html>