<?php

use util as GlobalUtil;
use utilphp\util;

include 'includes/session.php';
include '../includes/connector.php';
include 'PHP/contact.php';

global $conn;

$email = $_SESSION['email'];

$qeury = 'SELECT * FROM users WHERE email = :email';
$stmt = $conn->prepare($qeury);
$stmt->bindParam(':email', $email);
$stmt->execute();
$row = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <?php
    include '../user/includes/head.php';
    head('sunrise login en register', '');
    ?>
    </head>
  <body class="profile">
      <img src="../Images/sun-back.gif" class="sunrise" height="130px" alt="SunRise" />
      <div id="create-section" class="edit closed create-section">
          <div id="formplek" class="edit-wrap">
            <div id=updatevlieg>

</div>
          </div>
        </div>
    <div class="container bootstrap snippets bootdey">
      <div class="row">
        <div class="profile-nav col-md-3">
          <div class="panel">
            <div class="user-heading round">
              <a href="#">
                <img src="//" alt="" />
              </a>
              <h1><?php echo $row['voornaam']; ?></h1>
              <p><?php echo $row['email']; ?></p>
            </div>

            <ul class="nav nav-pills nav-stacked">
              <li>
                <a href="../user/userprofile.php"> <i class="fa fa-user"></i> Profile</a>
              </li>
              <?php if (isset($_SESSION['admin'])) { ?>
                  <li>
                    <a href="../admin/admin.php"> <i class="fa fa-user"></i>Admin page</a>
                  </li>
              <?php } ?>
              <li>
                <a href="recensie.php"> <i class="fa fa-calendar-days"></i> Recensie</a>
              </li>
              <li class="active">
                <a href="contact.php"> <i class="fa fa-envelope"></i> </i> contact</a>
              </li>
              <li>
                <a href="reizen.php"> <i class="fa fa-plane"></i> Reizen</a>
              </li>
              <li>
                <a href="bookingen.php"> <i class="fa fa-clipboard"></i> Bookingen</a>
              </li>
              <li>
                <a href="users.php"> <i class="fa fa-user"></i> Users</a>
              </li>
              <li>
                <a href="../index.php">
                  <i class="fa fa-home"></i> Sunrise homepage</a
                >
              </li>
              <li>
                <a href="../PHP/logout.php">
                  <i class="fas fa-sign-out-alt"></i> Log out</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="profile-info col-md-9">
          <div class="panel">
            <div class="bio-graph-heading">Contact</div>
            <div class="panel-body bio-graph-info">
              <h1>Contact</h1>
              <div class="row">
                <div class="bio-row fixreis">
                  <div class="containercon">
                    <?php
                    $contact = new contact();
                    $contact->contact();
                    ?>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div>
          </div>
        </div>
      </div>
    </div>
        <script type="text/javascript" src="../JS/contact.js"></script>
  </body>
</html>
