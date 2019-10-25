<?php
include 'database.php';

$db = mysqli_select_db($conn,"sportsdb"); 

//faching all other records in your db.
$latest_news_sql = "SELECT * FROM tbl_news order by date asc limit 1 ";
$latest_news_query = mysqli_query($conn,$latest_news_sql); 
?>
