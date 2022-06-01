<?php
// session_start();
// if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
//     header('Location: ../index.php');
//     exit();
// }
?>
<?php
include '../includes/util.php';
session_start();
$name = $_SESSION['admin'];
if (empty($name)) {
    redirect('../index.php');
}
 ?>
