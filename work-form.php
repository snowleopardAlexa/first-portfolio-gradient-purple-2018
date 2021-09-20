<?php
require_once 'vendor/autoload.php';

$fullname = $_POST['fullname'];
$msg = $_POST['message'];
$email = $_POST['email'];


$m = new PHPMailer\PHPMailer\PHPMailer();
$m->isSMTP();
$m->SMTPAuth = true;
// $m->SMTPDebug = 2;
$m->Host = 'smtp.gmail.com';
$m->Username = "lexmadevelopment@gmail.com";
$m->Password = "libertadiparola2";
$m->SMTPSecure = 'ssl';
$m->Port = 465;
$m->setFrom ($email, $fullname);
$m->addReplyTo($email , $fullname);
$m->addAddress('lexmadevelopment@gmail.com', 'Malexa');

$m->isHTML(true);

$body = "Name: ". $fullname . "<br />Email address: ".$email. "<br /> The message: ".$msg;

$m->Subject = 'Join us form';
$m->Body = $body;
if ($m->send()) {
    header("Location: work.html");
} else {
    echo "Sorry there was an error and your mail wasn't sent please try again!" . $m->ErrorInfo; 
}
?>
