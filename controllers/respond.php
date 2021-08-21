<?php
require '../vendor/autoload.php';
require '../classes/Mailer.php';
require '../classes/MailTemplate.php';
session_start();

$mailSent = false;
$name = 'Atoyebi Ajibola';
$email = htmlspecialchars(trim($_GET['email']));
$name = htmlspecialchars(trim($_GET['name']));
$message = MailTemplate::render('../email-template.html', ['header-subtitle' => 'from', 'header-title' => 'ATOYEBI AJIBOLA', 'greeting' => "Dear $name", 'content' => 'Your mail has been received we would get back to you in 2 working days.']);
$mailSent = Mailer::send($email, $message, 'Mail Received', "Atoyebi Ajibola");
$_SESSION['mail_sent'] = $mailSent;
?>
<script>
    window.location.assign('/');
</script>