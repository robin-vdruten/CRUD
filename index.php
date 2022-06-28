<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    include 'includes/head.php';
    head('Home | Sunrise', '');
    ?>
  </head>
  <body>
    <?php include 'includes/header.php'; ?>
    <div class="main-page">
      <div class="main-wrap-page">
        <div class="main-wrap-upper">
          <div class="line-alt"></div>
          <div class="main-alt-text">
            Schiphol laat sinds vrijdag 3 juni alleen passagiers toe in de
            terminals die binnen 4 uur vertrekken. Het is dus niet mogelijk om
            eerder dan 4 uur voor vertrek in te checken of je bagage af te
            geven. Tips en antwoorden op veelgestelde vragen over de drukte op
            Schiphol bekijk je op deze <a href="https://www.schiphol.nl/nl/pagina/extra-assistentie/">pagina</a>.
          </div>
        </div>
        <div class="main-wrap-up">
          <div class="main-wrap-up-left">
            <div class="main-wrap-image-flight">
              <img
                height="100%"
                src="../CRUD/images/pexels-photo-1320686.jpeg"
                alt="#"
              />
              <a href="booking.php?land=&hotel=&date=&personen=">
                <div class="hover-front-home">
                  <div class="align">
                    <h4>Alle bestemmingen</h4>
                    <hr />
                    <p>Klik voor meer info</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="main-wrap-image-flight">
              <img
                height="100%"
                src="../CRUD/images/pexels-photo-1320686.jpeg"
                alt="#"
              />
              <a href="bookingitem.php?reis=58">
                <div class="hover-front-home">
                  <div class="align">
                    <h4>Bestemming van de maand</h4>
                    <hr />
                    <p>Klik voor meer info</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="main-wrap-image-flight">
              <img
                height="100%"
                src="../CRUD/images/pexels-photo-1320686.jpeg"
                alt="#"
              />
              <a href="sunriselogin.php">
                <div class="hover-front-home">
                  <div class="align">
                    <h4>REGISTREREN</h4>
                    <hr />
                    <p>Maak zo een account aan!</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="main-wrap-image-flight">
              <img
                height="100%"
                src="../CRUD/images/pexels-photo-1320686.jpeg"
                alt="#"
              />
              <a href="bookingitem.php?reis=55">
                <div class="hover-front-home">
                  <div class="align">
                    <h4>Budget bestemming</h4>
                    <hr />
                    <p>Klik voor meer info</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="main-wrap-up-right">
            <div class="main-wrap-up-right-alt"><i class="fa-solid fa-sun"></i>&nbsp;<h4>Zon bestemmingen</h4></div>
            <div class="main-wrap-up-right-alt"><i class="fa-solid fa-snowflake"></i>&nbsp;<h4>Winter bestemmingen</h4></div>
            <div class="main-wrap-up-right-alt"><i class="fa-solid fa-city"></i>&nbsp;<h4>Land bestemmingen</h4></div>
            <div class="main-wrap-up-right-alt"><i class="fa-solid fa-water"></i>&nbsp;<h4>Zee bestemmingen</h4></div>
          </div>
        </div>
        <!-- <div class="main-wrap-downer">
          <div class="main-alt-text-down">//</div>
        </div> -->
      </div>
    </div>
    <?php include 'includes/footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="JS/main.js"></script>
  </body>
</html>
