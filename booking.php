<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Booking | Sunrise</title>
    <?php
    session_start();
    include 'includes/head.php';
    head('Booking | Sunrise', '');
    ?>
  </head>
  <body>
    <?php include 'includes/header.php'; ?>
    <div class="main-page">
      <div class="main-wrap-page">
        <div class="book-page">
          <?php
          include 'PHP/bookingshow.php';
          $items = [
              $_GET['hotel'],
              $_GET['land'],
              $_GET['date'],
              $_GET['personen'],
          ];
          search($items);
          ?>
        </div>
      </div>
    </div>
    <?php include 'includes/footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="JS/main.js"></script>
  </body>
</html>

<!--<h4>Placeholder</h4>
<p>Sunny</p>
<p>12,49</p>-->
