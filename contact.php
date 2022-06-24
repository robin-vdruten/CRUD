<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact | Sunrise</title>
    <?php
    include 'includes/head.php';
    head('Contact | Sunrise', '');
    ?>
  </head>
  <body>
    <?php include 'includes/header.php'; ?>
    <div class="main-page">
      <div class="main-wrap-page">
        <div class="contact-wrap-up">
          <div class="container-input">
            <div class="row">
              <h1>contact</h1>
            </div>
            <div class="row">
              <h4 style="text-align: center">Sunrise | We reageren zo snel mogelijk</h4>
            </div>
            <div class="row input-container">
              <div class="col-xs-12">
                <div class="styled-input wide">
                  <input type="text" required />
                  <label>naam</label>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="styled-input">
                  <input type="text" required />
                  <label>Email</label>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="styled-input" style="float: right">
                  <input type="text" required />
                  <label>Mobiel nummer</label>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="styled-input wide">
                  <textarea required></textarea>
                  <label>Bericht</label>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="btn-lrg submit-btn">Verstuur Bericht</div>
              </div>
            </div>
          </div>
          <div class="input-form-info">//</div>
        </div>
      </div>
    </div>
    <?php include 'includes/footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="JS/main.js"></script>
  </body>
</html>
