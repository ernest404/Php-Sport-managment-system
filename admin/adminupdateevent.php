<?php
include 'database.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$event_name=$_POST['ename'];
$type=$_POST['type'];
$description=$_POST['description'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$time=$_POST['time'];
$venue=$_POST['venue'];


// Check connection
 "Connected successfully";

$sql = $sql="INSERT INTO tbl_event (sport_event, type, description, start_date, end_date, time)VALUES('$event_name','$type','$description','$start_date','$end_date','$time')";

if ($conn->query($sql) === TRUE) {
	
echo '<script type="text/javascript">'; 
echo 'alert("Event Updated Sucessfully");'; 
echo 'window.location.href = "addevent.php";';
echo '</script>';  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>