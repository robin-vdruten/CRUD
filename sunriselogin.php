<?php
include 'includes/connector.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <?php
  include 'Includes/head.php';
  head('sunrise login en register', '');
  ?>
  <body>
    <?php include 'includes/header.php'; ?>
    <section class="login">
      <div class="login-wrapper">
        <div class="content">
          <h1>login / register</h1>
        </div>
        <ul id="tabbladen" class="tabbladen">
          <li id="logintab" class="active">Inloggen</li>
          <li id="registertab">Registreren</li>
        </ul>
        <div class="container">
          <div class="left">
            <form
              action="PHP/login.php"
              class="form"
              id="login-submit"
              name="register"
              method="POST"
            >
              <div class="formlayout">
                <div class="login" id="login">
                  <div class="mail">
                    <label>E-mailadress</label>
                    <input type="text" name="login" class="input" required />
                  </div>
                  <div class="password">
                    <label>Wachtwoord</label>
                    <input
                      type="password"
                      name="password"
                      class="input"
                      required
                    />
                  </div>
                  <div class="button">
                    <input
                      type="submit"
                      id="login-submit"
                      value="inloggen"
                      required
                    />
                  </div>
                </div>
              </div>
            </form>
            <form
              action="PHP/register.php"
              class="form"
              id="register-submit"
              name="register"
              method="POST"
            >
              <div class="formlayout">
                <div class="login" style="display: none" id="register" required>
                  <div class="mail">
                    <label>Voornaam</label>
                    <input type="text" name="voornaam" class="input" required />
                  </div>
                  <div class="mail">
                    <label>Achternaam</label>
                    <input
                      type="text"
                      name="achternaam"
                      class="input"
                      required
                    />
                  </div>
                  <div class="mail">
                    <label>E-mailadress</label>
                    <input type="text" name="email" class="input" required />
                  </div>
                  <div class="password">
                    <label>Wachtwoord</label>
                    <input
                      type="password"
                      name="wachtwoord"
                      class="input"
                      required
                    />
                  </div>
                  <div class="button">
                    <input
                      type="submit"
                      id="register-submit"
                      name="register"
                      value="register"
                    />
                  </div>
                </div>
              </div>
              <a href="https://www.klm.nl/information/legal/privacy-policy"
                >Privacy Policy</a
              >
            </form>
          </div>
          <div class="right">
            <div class="error" id="error"></div>
          </div>
        </div>
      </div>
    </section>
    <?php include 'Includes/footer.php'; ?>
    <script src="js/main.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
