<?php

use util as GlobalUtil;
use utilphp\util;

include '../PHP/util.php';
include '../includes/usersession.php';
include '../includes/connector.php';

global $conn;

if (isset($_GET['id'])) {
    if ($_SESSION['userID'] == $_GET['id']) {
        $sql = 'SELECT * FROM users WHERE userID = :userID';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':userID', $_GET['id']);
        $stmt->execute();
        $row = $stmt->fetch();

        $id = $row['userID'];
        if (isset($_GET['passwordreset']) == 'true') {
            $_SESSION['passwordreset'] = true;
        }
    } else {
        redirect('usereditprofile.php?id=' . $_SESSION['userID']);
        exit();
    }
} else {
    header('Location: userprofile.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <link rel="stylesheet" href="../CSS/styles.css" />
    <?php
    include 'includes/head.php';
    head('sunrise login en register', '');
    ?>
  </head>
  <body class="profile">
      <img src="../Images/sun-back.gif" class="sunrise" height="130px" alt="SunRise" />
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
              <li class="active">
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
              <form method="post" action="PHP/editprofile.php?id=<?php echo $row[
                  'userID'
              ]; ?>"class="row" id="change">
                <div class="bio-row">
                    <span>First Name </span>:
                    <input type="text" name="voornaam" value="<?php echo $row[
                        'voornaam'
                    ]; ?>"/>
                </div>
                <div class="bio-row">
                    <span>Last Name </span>:
                     <input type="text" name="achternaam" value="<?php echo $row[
                         'achternaam'
                     ]; ?>"/>
                </div>
                <div class="bio-row">
                    <span>Email </span>:
                     <input type="text" name="email" value="<?php echo $row[
                         'email'
                     ]; ?>"/>
                </div>
                <div class="bio-row">
                  <p><span>Mobile </span>: (12) 03 4567890</p>
                </div>
                <div class="bio-row">
                  <p><input type="submit" name="change" value="change">
                </p>
                </div>
            </form>
            <form method="post" action="" id="resetpassword">
                <input type="hidden" name="resetpass" value="true">
                <input type="hidden" name="email" value="appelflapkipkerrie@outlook.com">
                <input type="hidden" name="id" value="<?php echo $row[
                    'userID'
                ]; ?>">
                <input type="submit" id="resetpassword" name="passwordreset" value="reset password">
                <div id="errorreset"></div>
            </form>
            </div>
          </div>
          <div>
            <?php if (isset($_SESSION['passwordreset'])) { ?>
                <div class="row">
                    <div class="bio-graph-heading">ResetPassword</div>
                        <form action="PHP/editprofile.php?id=<?php echo $row[
                            'userID'
                        ]; ?>" id="passwordreset" method="post">
                            <p>nieuw password</p>
                            <input type="text" name="passreset" value=""/>
                            <p>herhaal nieuw password</p>
                            <input type="text" name="passtest" value=""/>
                            <input type="submit" name="passwordreset" value="change">
                        </form>
                    </div>
                </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../JS/passwordreset.js"></script>
  </body>
</html>
