<?php

use util as GlobalUtil;
use utilphp\util;

include '../includes/usersession.php';
include '../includes/connector.php';
include 'PHP/bookingreis.php';

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
    include 'includes/head.php';
    head('sunrise login en register', 'Artboard1.png');
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
                <div></div>
              </a>
              <h1><?php echo $row['voornaam']; ?></h1>
              <p><?php echo $row['email']; ?></p>
            </div>

            <ul class="nav nav-pills nav-stacked">
              <li class="active">
                <a href="userprofile.php"> <i class="fa fa-user"></i> Profile</a>
              </li>
              <?php if (isset($_SESSION['admin'])) { ?>
                  <li>
                    <a href="../admin/admin.php"> <i class="fa fa-user"></i>Admin page</a>
                  </li>
              <?php } ?>
              <li>
                <a href="userreview.php?id=<?php echo $row['userID']; ?>">
                  <i class="fa fa-calendar"></i> Reviews
                  <span class="label label-warning pull-right r-activity"
                    ><?php
                    include 'PHP/recensie.php';
                    $count = new recensie();
                    $count->getRowsNumber($row['userID']);
                    ?></span
                  ></a
                >
              </li>
              <li>
                <a href="usereditprofile.php?id=<?php echo $row[
                    'userID'
                ]; ?>"> <i class="fa fa-edit"></i> Edit profile</a>
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
            <div class="bio-graph-heading">Sunrise account</div>
            <div class="panel-body bio-graph-info">
              <h1>Account</h1>
              <div class="row">
                <div class="bio-row">
                  <p>
                    <span>First Name </span>:
                    <?php echo $row['voornaam']; ?>
                  </p>
                </div>
                <div class="bio-row">
                  <p>
                    <span>Last Name </span>:
                    <?php echo $row['achternaam']; ?>
                  </p>
                </div>
                <div class="bio-row">
                  <p>
                    <span>Email </span>:
                    <?php echo $row['email']; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="row">
              <div class="bio-graph-heading">Reizen</div>
                <div class="containercon pad">
                    <?php
                    $booking = new booking();
                    $booking->bookingreis($row['userID']);
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../JS/booking.js"></script>
  </body>
</html>
