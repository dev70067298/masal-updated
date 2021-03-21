<section class="footer">
    <div class="footer-section">
      <div class="row text-center">
        <div class="col-md-3 mb-3">
          <h5 class="heading1">ABOUT</h5>
          <hr class="line1" />
          <p>Lorem Sposum</p>
          <p>Lorem Sposum</p>
          <p>Lorem Sposum</p>
          <p>Lorem Sposum</p>
          <p>Lorem Sposum</p>
        </div>
        <div class="col-md-3 mb-3">
          <h5>COMMUNITY</h5>
          <p>Lorem Sposum</p>
          <p>Lorem Sposum</p>
          <p>Lorem Sposum</p>
          <p>Lorem Sposum</p>
          <p>Lorem Sposum</p>
        </div>
        <div class="col-md-3 mb-3">
          <h5>PLACE TO STAY</h5>
          <p>Lorem Sposum</p>
          <p>Lorem Sposum</p>
          <p>Lorem Sposum</p>
          <p>Lorem Sposum</p>
          <p>Lorem Sposum</p>
        </div>
        <div class="col-md-3 mb-3">
          <h5>EXPERIENCES</h5>
          <p>Lorem Sposum</p>
          <p>Lorem Sposum</p>
          <p>Lorem Sposum</p>
          <p>Lorem Sposum</p>
          <p>Lorem Sposum</p>
        </div>
      </div>
      <hr class="line2" />

      <div class="row logoBar">
        <div class="col-md-4 text-center">
          <img
            src="./img/footer-logo.png"
            class="img-fluid"
            alt=""
            width="300px"
          />
        </div>

        <div
          class="col-md-4 text-center d-flex justify-content-center align-self-end"
        >
          <p>Terms & Conditions</p>
          <p>|</p>
          <p>Privacy Policy</p>
          <p>|</p>
          <p>FAQ</p>
        </div>

        <div
          class="col-md-4 text-center d-flex justify-content-center align-self-end logos"
        >
          <i class="fab fa-facebook-f fa-2x mx-3"></i>
          <i class="fab fa-instagram fa-2x mx-3"></i>
          <i class="fab fa-twitter fa-2x mx-3"></i>
        </div>
      </div>
    </div>
  </section>


          <!-- JavaScript Bundle with Popper -->
          <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
            crossorigin="anonymous"
          ></script>
          <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"
            integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw=="
            crossorigin="anonymous"
          ></script>
          <!-- Jquery -->
          <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous"
          ></script>
          <!-- Slick -->
          <script
            src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"
            integrity="sha256-zUQGihTEkA4nkrgfbbAM1f3pxvnWiznBND+TuJoUv3M="
            crossorigin="anonymous"
          ></script>

          <!-- Personal JS -->
          <script>
            const navbar = document.querySelector(".navbar");
            window.onscroll = () => {
              if (window.scrollY > 200) {
                navbar.classList.add("nav-active");
              } else {
                navbar.classList.remove("nav-active");
              }
            };
          </script>

          <script>
            $(".slider").slick({
              // centerPadding: "100px",
              slidesToShow: 5,
              responsive: [
                {
                  breakpoint: 1350,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 4,
                  },
                },
                {
                  breakpoint: 1000,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 3,
                  },
                },
                {
                  breakpoint: 768,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 2,
                  },
                },
                {
                  breakpoint: 580,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 1,
                  },
                },
              ],
            });

            $(".slider2").slick({
              centerPadding: "100px",
              slidesToShow: 4,
              responsive: [
                {
                  breakpoint: 1350,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 4,
                  },
                },
                {
                  breakpoint: 1000,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 3,
                  },
                },
                {
                  breakpoint: 768,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 2,
                  },
                },
                {
                  breakpoint: 580,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 1,
                  },
                },
              ],
            });

            $(".slider3").slick();
          </script>
<script>
    const navbar = document.querySelector(".navbar");
    window.onscroll = () => {
      if (window.scrollY > 200) {
        navbar.classList.add("nav-active");
      } else {
        navbar.classList.remove("nav-active");
      }
    };
  </script>
  <!-- JavaScript Bundle with Popper -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"
    integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw=="
    crossorigin="anonymous"
  ></script>

    </body>
</html>
