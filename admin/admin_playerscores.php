<?php 
$conn=mysqli_connect("localhost","root","","sportsdb");


$name = mysqli_real_escape_string($conn,$_POST['playername']); 
$score = mysqli_real_escape_string($conn,$_POST['score']); 

 $sql = "INSERT INTO tbl_scorers(name,score,ts) VALUES ('$name','$score',CURRENT_TIMESTAMP)

ON DUPLICATE KEY UPDATE
   ts = if('$score'>score,CURRENT_TIMESTAMP,ts), score = if ('$score'>score, '$score', score)"; 

if ($conn->query($sql) === TRUE) {
	
    header('location:playerscores.php?status=success');  
    } else {
    header('location:playerscores.php?status=failed');
    }
    ?>