<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact | Sunrise</title>
    <?php
    session_start();
    include 'includes/head.php';
    head('Contact | Sunrise', 'Artboard1.png');
    ?>
  </head>
  <body>
    <?php include 'includes/header.php'; ?>
    <div class="main-page">
      <div class="main-wrap-page">
        <div class="contact-wrap-up">
          <div class="container-input">
            <form action="PHP/contactstuur.php" method="POST">
              <div class="row">
                <h1>contact</h1>
              </div>
              <div class="row">
                <h4 style="text-align: center">
                  Sunrise | We reageren zo snel mogelijk
                </h4>
              </div>
              <div class="row input-container">
                <div class="col-xs-12">
                  <div class="styled-input wide">
                    <input type="text" name="full_name" required />
                    <label>naam</label>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="styled-input">
                    <input type="text" name="full_email" required />
                    <label>Email</label>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="styled-input" style="float: right">
                    <input type="text" name="full_subject" required />
                    <label>onderwerp</label>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="styled-input wide">
                    <textarea required name="full_text"></textarea>
                    <label>Bericht</label>
                  </div>
                </div>
                <div class="col-xs-12">
                  <button class="btn-lrg submit-btn" name="stuur2">
                    Verstuur Bericht
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="input-form-info">
            <div class="info-text-box">
              <h4>Meer hulp nodig?</h4>
              <p>Social media</p>
              <p>
                Stel je vraag aan ons social care team via Facebook of Twitter.
                Wij staan 7 dagen per week voor je klaar.
              </p>
              <p>Ma t/m za 08:00 - 20:00 Zondag 09:00 - 20:00</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'includes/footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="JS/main.js"></script>
  </body>
</html>
