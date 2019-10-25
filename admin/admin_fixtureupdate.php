<?php 

$conn=mysqli_connect("localhost","root","","sportsdb");
  $matchday=$_POST['gameweek'];
  $sportid=$_POST['sport'];
  $gamedate=$_POST['gamedate'];
  $gametime=$_POST['gametime'];
  $hometeam =$_POST['team1'];
  $awayteam =$_POST['team2'];
  $homescore =$_POST['homescore'];
  $awayscore =$_POST['awayscore'];
  $status =$_POST['status'];



if($homescore==''||$awayscore==''){
	 $sql="INSERT INTO tbl_match(sport, date,time, hometeam, awayteam, status,matchday)VALUES('$sportid','$gamedate','$gametime','$hometeam','$awayteam','$status','$matchday')";
}else{
	$sql="INSERT INTO tbl_match(sport, date,time, hometeam, awayteam, homescore, awayscore, status,matchday)VALUES('$sportid','$gamedate','$gametime','$hometeam','$awayteam','$homescore','$awayscore','$status','$matchday')";
}
  
if ($conn->query($sql) === TRUE) {
	
  header('location:addfixture.php?status=success');  
  } else {
  header('location:addfixture.php?status=failed');
  }
  ?>