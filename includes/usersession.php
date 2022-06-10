<?php
include 'util.php';

session_start();

$loggedin = $_SESSION['loggedin'];

if (!$loggedin) {
    redirect('sunriselogin.php');
}
?>
