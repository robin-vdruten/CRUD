<?php
session_start();

session_destroy();

header('Location: ../sunriselogin.php');
exit();

?>
