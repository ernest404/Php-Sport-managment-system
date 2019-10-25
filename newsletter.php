<?php
include 'database.php';
if (isset($_POST['submit']) and isset($_POST['email'])) {
if ($_POST['email'] != "") 
{  
   $email = filter_var($_POST['email'] , FILTER_SANITIZE_EMAIL); 
 
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{  
                $message = "The mail you entered is not a valid email address.";
		} 
		else
		{
		mysqli_select_db($conn,'newsletter'); 	
		$sql = 'INSERT INTO mailinglist SET email = "' . $email . '"';
		$sql1 = 'SELECT email FROM mailinglist WHERE email = "'.$email.'"';
			if (mysqli_query ($conn, $sql1) == true) 
			{
			$message = "Your email is already registered.";
			}
			else
			{
			if (mysqli_query ($conn, $sql)) 
			{
			$message = "Your email has been successfully registered. Thanks for your interest in SABF!";
			}
			}
} 
}
else 
{  
    $message = "Please enter your email address."; 
}
}
?>