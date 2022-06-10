<?php

include '../includes/connector.php';
include '../includes/util.php';
include 'util.php';

global $conn;

$oops = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $wachtwoord = $_POST['wachtwoord'];

    $mail = util::validate_email($email);
    if (!$mail) {
        $oops = 'email is wrong';
        echo $oops;
        return $oops;
        redirect('../sunriselogin.php');
    }
    if (
        empty($email) ||
        empty($achternaam) ||
        empty($voornaam) ||
        empty($wachtwoord)
    ) {
        $oops = 'vul in';
        echo $oops;
        return $oops;
    } else {
        $query = 'SELECT * FROM users WHERE email = :email';
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        if ($stmt->rowCount() == 1) {
            redirect('../sunriselogin.php');
            $oops = 'account already created';
            echo $oops;
            return $oops;
        } else {
            $query =
                'INSERT INTO users(voornaam, achternaam, wachtwoord, email, admin) VALUES (:voornaam, :achternaam, :wachtwoord, :email, 0)';
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':voornaam', $voornaam);
            $stmt->bindParam(':achternaam', $achternaam);
            $stmt->bindParam(':wachtwoord', $wachtwoord);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $oops = 'account created successfully';
            echo $oops;
            return $oops;
            redirect('../sunriselogin.php');
        }
    }
}

function printError(): string
{
    global $error;
    return $error;
}
