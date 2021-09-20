<?php

require_once "vendor/autoload.php";
$clientName = $_POST['clientName'];
$clientEmail = $_POST['clientEmail'];
$clientMessage = $_POST['clientMessage'];

$mail = new PHPMailer\PHPMailer\PHPMailer(); // create a new object

$mail->isSMTP();
// $mail->SMTPDebug = 2; // 1 for Errors and messages and 2 for Errors
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 465 587
$mail->Username = "alexaprogramming@gmail.com";
$mail->Password = "valencia19";
$mail->setFrom("ollipvhpsw@gmail.com");
$mail->addAddress("ollipvhpsw@gmail.com");
//$mail->addAddress("aleksandravslomska@gmail.com");
$mail->addReplyTo("alexaprogramming@gmail.com", "Reply");
$mail->Subject = "Client Info";
$emailSending= "The client name is: " . $clientName . "<br />" . "The Client Email is: ". $clientEmail . "<br />" . "The message :" . $clientMessage . "<br />";
$mail->Body = $emailSending;
$mail->IsHTML(true);
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
  header('Location: index.html'); }
?>

