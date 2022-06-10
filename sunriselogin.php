<?php
include 'includes/connector.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <?php
  include 'Includes/head.php';
  head('sunrise login', '');
  ?>
  <body>
      <?php include 'includes/header.php'; ?>
    <section class="login">
      <div class="login-wrapper">
            <form action="PHP/login.php" class="form" id="form" method="POST">
                <label for="email">Adminname</label>
                <input type="tekst" id="email" name="login" />
                <label for="password">Password</label>
                <input type="" id="password" name="password" />
                <input type="submit" id="submit" value="Submit" />
                </form>
      </div>
    </section>
    <?php include 'Includes/footer.php'; ?>
  </body>
</html>
