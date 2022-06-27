<header>
  <div class="up-head">
    <a href="index.php">
      <img src="Images/sun-back.gif" height="130px" alt="SunRise" />
    </a>
    <div class="center">
      <nav>
        <div class="search-box">
          <div class="align-search">
            <form
              action="../php/menu-search.php"
              method="get"
              class="form-search"
            >
              <input
                class="search-nav"
                type="text"
                placeholder=" Zoeken.."
                name="search"
              />
              <button type="submit" class="button-search">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </form>
          </div>
        </div>
        <div class="main-buttons">
          <button><a href="overons.php">Over Ons</a></button>
          <button><a href="informatie.php">Informatie</a></button>
          <button><a href="contact.php">Contact</a></button>
        </div>
        <div class="misc-buttons">
          <a href="#"><i class="fa-solid fa-heart" style="color: red"></i></a>
          <a href="sunriselogin.php"><i class="fa-solid fa-user"></i></a>
          <?php if (!empty($_SESSION['naam'])) {
              echo '<a href="user/userprofile.php">' .
                  $_SESSION['naam'] .
                  '</a>';
              echo '<a href="PHP/logout.php">logout</a>';
          } ?>
        </div>
      </nav>
    </div>
  </div>
  <div class="down-head">
    <div class="out-book">
      <div class="in-book">
        <div class="wrapper-book">
          <form class="nav-form" action="" method="POST">
            <div class="option-book vakantietype">
              <label for=""
                ><i class="fa-solid fa-umbrella-beach"></i
                >&nbsp;Vakantietype</label
              >
              <input
                type="text"
                class="collapsible"
                placeholder="Geen voorkeur"
                id="insert-type"
              />
              <div class="dropping">
                <div class="drop-book1"></div>
                <div class="drop-book2">
                  <h3>Kies jouw type vakantie</h3>
                  <br />
                  <div class="book-sort">
                    <div class="dropdown">
                      <ul>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Alle vakanties</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >All inclusive</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Autovakanties</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Fly-drive vakanties</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Last minute</a
                          >
                        </li>
                      </ul>
                    </div>
                    <div class="dropdown">
                      <ul>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Rondreizen</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Stedentrip</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Vliegvakantie</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Wintersport</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Zonvakanties</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="option-book Bestemming">
              <label for=""
                ><i class="fa-solid fa-location-dot"></i>&nbsp;Bestemming</label
              >
              <input
                type="text"
                class="collapsible"
                placeholder="Geen voorkeur"
                id="insert-bestemming"
              />
              <div class="dropping2" style="display:none">
                <div class="drop-book1"></div>
                <div class="drop-book2">
                  <h3>Populaire bestemmingen</h3>
                  <br />
                  <div class="book-sort">
                    <div class="dropdown">
                      <ul>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Alle bestemmingen</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Spanje</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Turkije</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Kaapverdië</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Griekenland</a
                          >
                        </li>
                      </ul>
                    </div>
                    <div class="dropdown">
                      <ul>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Curaçao</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Aruba</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Bonaire</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Canarische Eilanden</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Egypte</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="option-book Wanneer">
              <label for=""
                ><i class="fa-solid fa-calendar-day"></i>&nbsp;Wanneer?</label
              >
              <input
                type="datetime-local"
                id="date"
                name="date_time"
                value=""
              />
            </div>
            <div class="option-book wie">
              <label for=""
                ><i class="fa-solid fa-user-group"></i>&nbsp;Wie?</label
              >
              <input
                type="text"
                class="collapsible"
                placeholder="Geen voorkeur"
              />
            </div>
            <div class="book">
              <button class="button-zoek" name="stuur">Zoeken</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <video autoplay loop muted>
      <source src="images/palmbiem.mp4" type="video/mp4" />
    </video>
  </div>
</header>
