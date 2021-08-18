<?php
require '../vendor/autoload.php';
require '../classes/Mailer.php';
session_start();

$mailSent = false;
$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));

$mailSent = Mailer::send($email, $message, $subject, $name);
$_SESSION['mail_sent'] = $mailSent;
header('location: ../');
