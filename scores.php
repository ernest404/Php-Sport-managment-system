<?php
$conn=mysqli_connect("localhost","root","","sportsdb");
    $result=mysqli_query($conn,"SELECT * FROM tbl_fixtures WHERE datetime >= NOW(); ORDER BY venue_id DESC") OR die('Fatal error');
    $numRows=mysqli_num_rows($result) or die("could not fetch array");
    $info=array(array());
      if($numRows>0){
        for( $i=0 ; $i < $numRows ; $i++ ){
          $info[]=mysqli_fetch_assoc($result);
        }
      }
  }else{
    echo "<p style='color:#F7FDD4'>Please select a school of choice</p>";
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Scores</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
 <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/all.css">
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="">


<style type="text/css">
    .wrapper1{
      display: grid;
      grid-template-columns: 1fr 3fr;
      grid-gap: 1em;
      grid-auto-rows:minmax(100px,auto);
    }
    .wrapper1>div{
      background: #white;
      padding: 1em;
    }
    .wrapper1>div:nth-child(odd){
      background: #ddd;
    }
    .wrapper2{
      display: grid;
      grid-template-columns: 1fr 2fr 1fr;
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
    .wrapper2 h5{
      font-family: cursive;
      text-align: center;
    }

    .nested1{
      display: grid;
      grid-template-rows:1fr 1fr 1fr  1fr;
      grid-gap: 1em;
      grid-auto-rows:minmax(100px,auto);

    }
    .nested1 a:hover,.nested1 a:focus{ color: green;}


    .nested1 div:hover,.nested1 div:focus{background:white; color: green;}
    .nested1 div:nth-child(odd):hover,.nested1 div:nth-child(odd):focus{background: white; color: green}
    .nested1>div{
      background:#f5f5f5;
      padding: 1em;
      
    }

    .nested1 a{
      text-decoration: none;
    }
    .nested1>div:nth-child(odd){
      background:#f5f5f5 ;
    }
    .nested div:hover{
      opacity: 1;

    }

    
  </style>

</head>
<body>
  <div class="header1">
    <div class="container">
      <div class="header-left">
        <a href="index.html"><i class="fas fa-home"></i> Livescore ></a>

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

<div id="header2">

 <ul id="navbar" style="margin-bottom:0px">
  	<li><a href="#">Home</a></li>




   <li class="dropdown"><a href="#"class="dropdown-toggle"><i><b style="font-weight: normal;">Sports</b></i><span class="caret"></span></a>
  <div class="dropdown-content">
    <a href="#">Football</a>
    <a href="#">Hockey</a>
    <a href="#">Basketball</a>
    <a href="#">Rugby</a>
</div>
</li>

  	<li><a href="#">Scores</a></li>
    <li><a href="news.php">News</a></li>
    <li><a href="gallery.html">gallery</a></li>
  	<li><a href="#">Join us</a></li>
    <li><a href="adminlogin.html">Admin</a></li>
    
  </ul>
