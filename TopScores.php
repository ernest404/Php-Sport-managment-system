<?php
    $conn=mysqli_connect("localhost","root","","sportsdb");
     //This query grabs the top 10 scores, sorting by score and timestamp.
    $query = "SELECT * FROM tbl_scores ORDER by score DESC, ts ASC LIMIT 10";
    $result = mysqli_query($conn,$query) or die('Query failed: ' . mysqli_error());
 
    //We find our number of rows
    $result_length = mysqli_num_rows($result); 
    
    //And now iterate through our results
    for($i = 0; $i < $result_length; $i++)
    {
         $row = mysqli_fetch_array($result);
         echo $row['name'] . "\t" . $row['score'] . "\n"; // And output them
    }
?>