<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true); // Passing `true` enables exceptions
try {
    $mail->SMTPDebug = false; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.office365.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = ''; // SMTP username
    $mail->Password = ''; // SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->isHTML(true); // TCP port to connect to

    //Recipients
    $mail->setFrom('');
    $mail->addAddress('');

    //Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body =
        'Bericht: ' . $_POST['text'] . ' Verzender: ' . $_POST['mail'];

    $mail->send();

    echo "<script>window.location = '//'</script>";

    exit();
} catch (Exception $e) {
    echo "<script>alert('Probeer het opnieuw! (ERROR: $mail->ErrorInfo)')</script>; <script>window.location = '//'</script>";
}
?>
