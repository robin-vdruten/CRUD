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
              action="PHP/bookshowsearch.php"
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
          <button id="home-btn"><a href="index.php">Home</a></button>
          <button><a href="overons.php">Over Ons</a></button>
          <button><a href="informatie.php">Informatie</a></button>
          <button><a href="contact.php">Contact</a></button>
        </div>
        <div class="misc-buttons">
          <a href="sunriselogin.php"><i class="fa-solid fa-user"></i></a>
          <?php if (!empty($_SESSION['naam'])) {
              echo '<a href="user/userprofile.php">' .
                  $_SESSION['naam'] .
                  '</a>';
              echo '<a href="PHP/logout.php">logout</a>';
          } ?>
        </div>
      </nav>
      <div class="align-search2">
        <form
          action="PHP/bookshowsearch.php"
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
  </div>
  <div class="down-head">
    <div class="out-book">
      <div class="in-book">
        <div class="wrapper-book">
          <form class="nav-form" action="//////HIER/////" method="POST">
            <div class="option-book vakantietype">
              <label for=""
                ><i class="fa-solid fa-location-dot"></i
                >&nbsp;Land</label
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
                  <h3>Kies jouw Land bestemming</h3>
                  <br />
                  <div class="book-sort">
                    <div class="dropdown">
                      <ul>
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
                            >Curaçao</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Nederlands</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Belgie</a
                          >
                        </li>
                      </ul>
                    </div>
                    <div class="dropdown">
                      <ul>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Duitsland</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Engeland</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Schotland</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Japan</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Spanje</a
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
                ><i class="fa-solid fa-hotel"></i>&nbsp;Hotel</label
              >
              <input
                type="text"
                class="collapsible"
                placeholder="Geen voorkeur"
                id="insert-bestemming"
              />
              <div class="dropping2" style="display: none">
                <div class="drop-book1"></div>
                <div class="drop-book2">
                  <h3>Alleen de beste hotels</h3>
                  <br />
                  <div class="book-sort">
                    <div class="dropdown">
                      <ul>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Culinair's</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Hertog</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Bing Chiling</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Liam's hotel</a
                          >
                        </li>
                        <li>
                          <i class="fa-solid fa-angle-right"></i>&nbsp;<a
                            >Robin's hotel</a
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
                ><i class="fa-solid fa-calendar-day"></i>&nbsp;Wanneer</label
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
                ><i class="fa-solid fa-user-group"></i>&nbsp;Hoeveel personen</label
              >
              <input
                type="number"
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
