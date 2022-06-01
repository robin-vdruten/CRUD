<?php
$servername = 'localhost';
$db = 'sunrise';
$username = 'root';
$password = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$servername;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $conn = new PDO($dsn, $username, $password, $opt);
} catch (PDOException $e) {
    echo $e->getMessage();
    die('oops');
}
?>
