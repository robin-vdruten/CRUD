<?php
include '../../includes/connector.php';
include '../../PHP/util.php';
include '../../includes/usersession.php';

global $conn;

if (isset($_POST['change'])) {
    if ($_SESSION['userID'] == $_GET['id']) {
        $sql =
            'UPDATE users SET email = :email,voornaam = :voornaam , achternaam = :achternaam WHERE userID = :userID';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':voornaam', $_POST['voornaam']);
        $stmt->bindParam(':achternaam', $_POST['achternaam']);
        $stmt->bindParam(':userID', $_GET['id']);
        $stmt->execute();

        redirect('../../PHP/logout.php');
    } else {
        redirect('../userprofile.php');
    }
} elseif (isset($_POST['passwordreset'])) {
    if ($_SESSION['userID'] == $_GET['id']) {
        $sql =
            'UPDATE users SET wachtwoord = :wachtwoord WHERE userID = :userID';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':wachtwoord', $_POST['passreset']);
        $stmt->bindParam(':userID', $_GET['id']);
        $stmt->execute();

        unset($_SESSION['passwordreset']);

        redirect('../userprofile.php');
    } else {
        redirect('../userprofile.php');
    }
} else {
    echo 'oops';
}

?>
