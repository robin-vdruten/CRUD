<?php
include '../includes/util.php';
session_start();
if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
    redirect('Location: ../index.php');
    exit();
}
?>
