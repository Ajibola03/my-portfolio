<?php
require '../vendor/autoload.php';
require '../classes/Mailer.php';
session_start();

$mailSent = false;
$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));

$mailSent = Mailer::send('atoyebieniola93@gmail.com', $message, $subject, $name);
$_SESSION['mail_sent'] = $mailSent;
if($mailSent){
    $mailSent = Mailer::send($email, "Your mail has been received.<br><br>I will get back to you within 48 hours", "Reply from Atoyebi AJibola", "Atoyebi Ajibola");
}
header('location: ../');
