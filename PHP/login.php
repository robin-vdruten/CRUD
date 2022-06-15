<?php
include_once '../includes/connector.php';
include '../includes/util.php';

global $conn;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $naam = $_POST['login'];
    $wachtwoord = $_POST['password'];

    if (empty($naam) || empty($wachtwoord)) {
        $oops = 'fill forms';
        echo $oops;
        return $oops;
        redirect('../sunriselogin.php');
    } else {
        $query =
            'SELECT * FROM users WHERE email = :email AND wachtwoord = :wachtwoord';
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':email', $naam);
        $stmt->bindParam(':wachtwoord', $wachtwoord);
        $stmt->execute();
        $user = $stmt->fetch();
        if ($stmt->rowCount() == 1) {
            if ($user['admin'] == 1) {
                session_start();
                $_SESSION['admin'] = true;
                $_SESSION['loggedin'] = true;
                $_SESSION['naam'] = $user['voornaam'];
                $_SESSION['userID'] = $user['userID'];
                $oops = 'admin';
                echo $oops;
                return $oops;
                redirect('../admin/admin.php');
            } elseif ($user['admin'] == 0) {
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['naam'] = $user['voornaam'];
                $_SESSION['userID'] = $user['userID'];
                $oops = 'user';
                echo $oops;
                return $oops;
                redirect('../index.php');
            }
        } else {
            $oops = 'Email or password is wrong';
            echo $oops;
            return $oops;
            redirect('../sunriselogin.php');
        }
    }
}

// function printError(): string
// {
//     global $error;
//     return $error;
// }
