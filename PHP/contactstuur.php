<?php

include_once ('../includes/connector.php');   

$full_name = $_POST['full_name'];
$full_email = $_POST['full_email'];
$full_subject = $_POST['full_subject'];
$text = $_POST['full_text'];


$sql = "INSERT INTO contact (naam, email, bericht, onderwerp) VALUES ('$full_name', '$full_email', '$text', '$full_subject')";

$conn->exec($sql);

header("location: ../contact.php");