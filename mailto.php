 <?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
ini_set('display_errors',  true);
include 'database.php';
 
      $name = $_POST['Name'];
      $message = $_POST['Message'];
      $email =$_POST['Email'];

  $msg='Name: '.$_POST['Name']
        .'Message:'.$_POST['Message']
        .'Email:'.$_POST['Email'];
   $mail = new PHPMailer(true);

    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Host='smtp.gmail.com';
    $mail->Port='587';
    $mail->isHTML();
    $mail->Username='ernestmuisyoo@gmail.com';
    $mail->Password='Ernest5178';
    $mail->setFrom($email);
    $mail->Subject='Sports Management System';
    $mail->Body=$msg;
    $mail->AddAddress('derrickmbarani@gmail.com');
    $mail->send();?>

  <?php

          if($mail->send()){
            $result="INSERT INTO tbl_message (name, email, message,time,date)VALUES('$name','$email','$message',(CURRENT_TIME),(CURRENT_DATE))";
        if ($conn->query($result) === TRUE) {    
          echo("<script>window.location.href='index.php?status=success'</script>");  
  } else {
          echo("<script>window.location.href='index.php?status=failed'</script>"); 
  }}
      ?>
