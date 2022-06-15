<?php

use util as GlobalUtil;
use utilphp\util;

include '../includes/usersession.php';
include '../includes/connector.php';

global $conn;

$naam = $_SESSION['naam'];

$qeury = 'SELECT * FROM users WHERE voornaam = :voornaam';
$stmt = $conn->prepare($qeury);
$stmt->bindParam(':voornaam', $naam);
$stmt->execute();
$row = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
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
              <li class="active">
                <a href="userprofile.php"> <i class="fa fa-user"></i> Profile</a>
              </li>
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
                <div class="bio-row">
                  <p><span>Mobile </span>: (12) 03 4567890</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="row">
              <div class="bio-graph-heading">Vluchten</div>
              <!-- <div class="col-md-6">
                <div class="panel">
                  <div class="panel-body">
                    <div class="bio-chart">
                      <div style="display: inline; width: 100px; height: 100px">
                        <canvas width="100" height="100px"></canvas
                        ><input
                          class="knob"
                          data-width="100"
                          data-height="100"
                          data-displayprevious="true"
                          data-thickness=".2"
                          value="35"
                          data-fgcolor="#e06b7d"
                          data-bgcolor="#e8e8e8"
                          style="
                            width: 54px;
                            height: 33px;
                            position: absolute;
                            vertical-align: middle;
                            margin-top: 33px;
                            margin-left: -77px;
                            border: 0px;
                            font-weight: bold;
                            font-style: normal;
                            font-variant: normal;
                            font-stretch: normal;
                            font-size: 20px;
                            line-height: normal;
                            font-family: Arial;
                            text-align: center;
                            color: rgb(224, 107, 125);
                            padding: 0px;
                            -webkit-appearance: none;
                            background: none;
                          "
                        />
                      </div>
                    </div>
                    <div class="bio-desk">
                      <h4 class="red">Amsterdam</h4>
                      <p>Start : 15 July</p>
                      <p>End : 15 August</p>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
