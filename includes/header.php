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
              <button><a href="#">Over Ons</a></button>
              <button><a href="#">Informatie</a></button>
              <button><a href="#">Contact</a></button>
            </div>
            <div class="misc-buttons">
              <a href="#"><i class="fa-solid fa-eye"></i></a>
              <a href="#"
                ><i class="fa-solid fa-heart" style="color: red"></i
              ></a>
              <a href="sunriselogin.php"><i class="fa-solid fa-user"></i></a>
                <?php if (!empty($_SESSION['naam'])) {
                    echo '<a href="userprofile.php">' .
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
                              <a href="" id="all"
                                ><i class="fa-solid fa-angle-right"></i
                                >&nbsp;Alle vakanties</a
                              >
                            </li>
                            <li>
                              <a href=""
                                ><i class="fa-solid fa-angle-right"></i
                                >&nbsp;All inclusive</a
                              >
                            </li>
                            <li>
                              <a href=""
                                ><i class="fa-solid fa-angle-right"></i
                                >&nbsp;Autovakanties</a
                              >
                            </li>
                            <li>
                              <a href=""
                                ><i class="fa-solid fa-angle-right"></i
                                >&nbsp;Fly-drive vakanties</a
                              >
                            </li>
                            <li>
                              <a href=""
                                ><i class="fa-solid fa-angle-right"></i
                                >&nbsp;Last minute</a
                              >
                            </li>
                          </ul>
                        </div>
                        <div class="dropdown">
                          <ul>
                            <li>
                              <a href=""
                                ><i class="fa-solid fa-angle-right"></i
                                >&nbsp;Rondreizen</a
                              >
                            </li>
                            <li>
                              <a href=""
                                ><i class="fa-solid fa-angle-right"></i
                                >&nbsp;Stedentrip</a
                              >
                            </li>
                            <li>
                              <a href=""
                                ><i class="fa-solid fa-angle-right"></i
                                >&nbsp;Vliegvakantie</a
                              >
                            </li>
                            <li>
                              <a href=""
                                ><i class="fa-solid fa-angle-right"></i
                                >&nbsp;Wintersport</a
                              >
                            </li>
                            <li>
                              <a href=""
                                ><i class="fa-solid fa-angle-right"></i
                                >&nbsp;Zonvakanties</a
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
                    ><i class="fa-solid fa-location-dot"></i
                    >&nbsp;Bestemming</label
                  >
                  <input
                    type="text"
                    class="collapsible"
                    placeholder="Geen voorkeur"
                  />
                  <div class="dropping">
                    <div class="drop-book1"></div>
                    <div class="drop-book2">
                      <h3>Populaire bestemmingen</h3>
                      <br />
                      <div class="book-sort">
                        <div class="dropdown">
                          <ul>
                            <li>
                              <a href=""
                                ><i class="fa-solid fa-angle-right"></i
                                >&nbsp;Alle bestemmingen</a
                              >
                            </li>
                            <li>
                              <a href=""
                                ><i class="fa-solid fa-angle-right"></i
                                >&nbsp;Spanje</a
                              >
                            </li>
                            <li>
                              <a href=""
                                ><i class="fa-solid fa-angle-right"></i
                                >&nbsp;Turkije</a
                              >
                            </li>
                            <li>
                              <a href=""
                                ><i class="fa-solid fa-angle-right"></i
                                >&nbsp;Kaapverdië</a
                              >
                            </li>
                            <li>
                              <a href=""
                                ><i class="fa-solid fa-angle-right"></i
                                >&nbsp;Griekenland</a
                              >
                            </li>
                          </ul>
                        </div>
                        <div class="dropdown">
                          <ul>
                            <li>
                              <a href=""
                                ><i class="fa-solid fa-angle-right"></i
                                >&nbsp;Curaçao</a
                              >
                            </li>
                            <li>
                              <a href=""
                                ><i class="fa-solid fa-angle-right"></i
                                >&nbsp;Aruba</a
                              >
                            </li>
                            <li>
                              <a href=""
                                ><i class="fa-solid fa-angle-right"></i
                                >&nbsp;Bonaire</a
                              >
                            </li>
                            <li>
                              <a href=""
                                ><i class="fa-solid fa-angle-right"></i
                                >&nbsp;Canarische Eilanden</a
                              >
                            </li>
                            <li>
                              <a href=""
                                ><i class="fa-solid fa-angle-right"></i
                                >&nbsp;Egypte</a
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
                    ><i class="fa-solid fa-calendar-day"></i
                    >&nbsp;Wanneer?</label
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
          <source src="images/Beach - 63983.mp4" type="video/mp4" />
        </video>
      </div>
    </header>