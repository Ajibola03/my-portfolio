<?php
require '../vendor/autoload.php';
require '../classes/Mailer.php';
require '../classes/MailTemplate.php';
session_start();

$mailSent = false;
$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$subject = htmlspecialchars(trim($_POST['subject']));
$raw_message = htmlspecialchars(trim($_POST['message']));
$message = MailTemplate::render('../email-template.html', ['header-subtitle' => 'from', 'header-title' => strtoupper($name), 'greeting' => "From $email", 'content' => $raw_message]);
$mailSent = Mailer::send('atoyebieniola93@gmail.com', $message, $subject, $name);
$_SESSION['mail_sent'] = $mailSent;
if ($mailSent) {
    header("location: respond?email=$email&name=$name");
} else {
    header("location: ../");
}
