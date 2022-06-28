<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Item | Sunrise</title>
    <?php
    session_start();
    include 'includes/head.php';
    head('Item | Sunrise', 'Artboard1.png');
    ?>
  </head>
  <body>
    <div id="createrecensie" class="edit closed create-section">
      <div id="formplek" class="edit-wrap">
        <div id="updaterecen" style="padding:30px;"></div>
      </div>
    </div>
    <?php include 'includes/header.php'; ?>
    <div class="main-page">
      <div class="main-wrap-page">
        <?php include 'PHP/bookingitemshow.php'; ?>
      </div>
    </div>
    <?php include 'includes/footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="JS/main.js"></script>
    <script src="JS/booking.js"></script>
    <script src="JS/recensiebooking.js"></script>
  </body>
</html>
