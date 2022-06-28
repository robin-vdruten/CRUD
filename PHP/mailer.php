<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['mailer'])) {
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = false; // Enable verbose debug output
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'smtp.office365.com'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'sunriserobindruten@outlook.com'; // SMTP username
        $mail->Password = '!sunrise1'; // SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 25;
        $mail->isHTML(true); // TCP port to connect to

        //Recipients
        $mail->setFrom('sunriserobindruten@outlook.com');
        $mail->addAddress($_POST['email']);

        //Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'test';
        $mail->Body =
            'Bericht: ' .
            '<a href="http://localhost/CRUD/CRUD/user/usereditprofile.php?id=' .
            $_POST['id'] .
            '&' .
            'passwordreset=true' .
            '">reset password</a>' .
            ' Verzender: ' .
            'test' .
            '';

        $mail->send();

        $error = 'mail sent!';
        echo $error;
        return $error;

        exit();
    } catch (Exception $e) {
        $error = 'mail not sent!';
        echo $error;
        return $error;
        echo "<script>alert('Probeer het opnieuw! (ERROR: $mail->ErrorInfo)')</script>; <script>window.location = '//'</script>";
    }
}
if (isset($_POST['resetpass'])) {
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = false; // Enable verbose debug output
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'smtp.office365.com'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'sunriserobindruten@outlook.com'; // SMTP username
        $mail->Password = '!sunrise1'; // SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 25;
        $mail->isHTML(true); // TCP port to connect to

        //Recipients
        $mail->setFrom('sunriserobindruten@outlook.com');
        $mail->addAddress($_POST['email']);

        //Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'test';
        $mail->Body =
            'Bericht: ' .
            '<a href="http://localhost/CRUD/CRUD/user/usereditprofile.php?id=' .
            $_POST['id'] .
            '&' .
            'passwordreset=true' .
            '">reset password</a>' .
            ' Verzender: ' .
            'sunriserobindruten@outlook.com' .
            '';

        $mail->send();

        $error = 'mail sent!';
        echo $error;
        return $error;

        exit();
    } catch (Exception $e) {
        $error = 'mail not sent!';
        echo $error;
        return $error;
        echo "<script>alert('Probeer het opnieuw! (ERROR: $mail->ErrorInfo)')</script>; <script>window.location = '//'</script>";
    }
}

?>
