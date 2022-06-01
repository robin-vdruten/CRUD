<?php

include '../includes/connector.php';
include '../includes/util.php';

global $conn;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $naam = $_POST['login'];
    $wachtwoord = $_POST['password'];

    var_dump($_POST);
    if (empty($naam) || empty($wachtwoord)) {
        $error = 'You need to fill all forms!';
        redirect('../test.php');
    } else {
        $query =
            'SELECT * FROM users WHERE voornaam = :naam AND wachtwoord = :wachtwoord';
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':naam', $naam);
        $stmt->bindParam(':wachtwoord', $wachtwoord);
        $stmt->execute();
        $user = $stmt->fetch();
        if ($stmt->rowCount() == 1) {
            if ($user['admin'] == 1) {
                $_SESSION['admin'] = 'admin';
                redirect('../admin/admin.php');
            } elseif ($user['admin'] == 0) {
                redirect('../index.php');
            }
        } else {
            redirect('../sunriselogin.php');
        }
    }
}

function printError(): string
{
    global $error;
    return $error;
}
