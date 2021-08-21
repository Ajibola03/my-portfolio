<?php

require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer
{
    /**
     * @param $template EmailTemplate|int|string EmailTemplate object to use or id of the template in the database
     * @param $toEmail string destination email
     * @param $body string[] an array containing data to replace in the template based on their keys<br/>
     * <b>Possible array keys</b>: contact_or_marketer_name, password_reset_link, contact_name, school_name, marketer_name
     * @param $subject string|? Mail Subject 
     * @return bool true if successful otherwise false
     */

    public static function send($toEmail, $body, $subject = null, $name = '')
    {
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = getenv('SMTP_USERNAME');                     //SMTP username
            $mail->Password   = getenv('SMTP_PASS');                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            //Recipients
            $mail->setFrom('atoyebieniola93@gmail.com', $name);
            $mail->addAddress($toEmail);     //Add a recipient
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->AltBody = htmlspecialchars($body);
            $mailSent = $mail->send();
            return $mailSent;
        } catch (Exception $e) {
            return false;
        }
    }
}
