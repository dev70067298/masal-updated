@extends('layout.navbar')



          <!-- Carousel Section -->
          <section id="carousel-section">
            <div
              id="carouselExampleIndicators"
              class="carousel slide"
              data-bs-ride="carousel"
            >
              <div class="carousel-indicators">
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="0"
                  class="active"
                  aria-current="true"
                  aria-label="Slide 1"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="1"
                  aria-label="Slide 2"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="2"
                  aria-label="Slide 3"
                ></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./img/carousel1.png"
                    class="d-block w-100 img-fluid"
                    alt="..."
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="./img/carousel1.png"
                    class="d-block w-100 img-fluid"
                    alt="..."
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="./img/carousel1.png"
                    class="d-block w-100 img-fluid"
                    alt="..."
                  />
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev"
              >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next"
              >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              <div
                class="carousel-overlay d-flex justify-content-center flex-column align-items-center"
              >
                <h2 class="text-white">Don't listen to what they say</h2>
                <h1>GO SEE</h1>
                <button class="btn py-2">Explore Nearby Stays</button>
                <div
                  class="details-row d-flex mt-5 justify-content-center d-none d-lg-flex"
                >
                  <div class="d-flex first">
                    <div>
                      <img src="./img/pin.png" width="12px" height="18px" alt="" />
                    </div>
                    <div class="ps-3">
                      <p class="mb-0">Location</p>
                      <p class="text-muted">Enter the desired destination</p>
                    </div>
                  </div>

                  <div class="d-flex first">
                    <div>
                      <img
                        src="./img/calender.png"
                        width="15px"
                        height="18px"
                        alt=""
                      />
                    </div>
                    <div class="ps-3">
                      <p class="mb-0">Check in Date</p>
                      <p class="text-muted">Add date</p>
                    </div>
                  </div>

                  <div class="d-flex first">
                    <div>
                      <img
                        src="./img/calender.png"
                        width="15px"
                        height="18px"
                        alt=""
                      />
                    </div>
                    <div class="ps-3">
                      <p class="mb-0">Check Out Date</p>
                      <p class="text-muted">Add date</p>
                    </div>
                  </div>

                  <div class="d-flex second">
                    <div>
                      <img src="./img/guest.png" width="12px" height="18px" alt="" />
                    </div>
                    <div class="ps-3">
                      <p class="mb-0">Guests</p>
                      <p class="text-muted">Add guests</p>
                    </div>
                  </div>

                  <div class="d-flex ps-5 pe-5"></div>
                </div>
                <div class="search-button d-none d-lg-block">
                  <img src="./img/search.png" height="105px" alt="" />
                </div>
              </div>
            </div>
          </section>

          <!-- Find Nearest Host -->
          <section id="nearest-host">
            <div class="host-section">
              <h2 class="d-inline pe-1">Find The Nearest Host</h2>
              <img src="./img/Group.png" alt="" class="d-inline pb-2" />
            </div>
            <div class="background">
              <div class="card-section">
                <div class="row">
                  <div class="col-lg-3 offset-lg-9">
                    <input
                      class="form-control me-2 search"
                      type="search"
                      placeholder="Search Here"
                      aria-label="Search"
                    />
                    <button class="btn btn-outline-success search-btn" type="submit">
                      <i class="fas fa-search text-white"></i>
                    </button>
                  </div>
                </div>

                <div class="row mt-5">
                  <div class="slider">
                    <div class="card" style="background-color: white">
                      <img src="./img/host1.png" class="card-img-top" />
                      <div class="card-body text-center">
                        <h5 class="card-title text-primary">Lorem Sposum</h5>
                        <a
                          href="#"
                          class="btn btn-outline-secondary"
                          style="border-radius: 20px"
                          >$14.99</a
                        >
                        <p class="card-text">Hosts a beautiful villa in New York</p>
                        <a href="#" class="btn btn-primary" style="border-radius: 0"
                          >Book Now</a
                        >
                      </div>
                    </div>

                    <div class="card" style="background-color: white">
                      <img src="./img/host 2.png" class="card-img-top" />
                      <div class="card-body text-center">
                        <h5 class="card-title text-primary">Lorem Sposum</h5>
                        <a
                          href="#"
                          class="btn btn-outline-secondary"
                          style="border-radius: 20px"
                          >$14.99</a
                        >
                        <p class="card-text">Hosts a beautiful villa in New York</p>
                        <a href="#" class="btn btn-primary" style="border-radius: 0"
                          >Book Now</a
                        >
                      </div>
                    </div>

                    <div class="card" style="background-color: white">
                      <img src="./img/host 3.png" class="card-img-top" />
                      <div class="card-body text-center">
                        <h5 class="card-title text-primary">Lorem Sposum</h5>
                        <a
                          href="#"
                          class="btn btn-outline-secondary"
                          style="border-radius: 20px"
                          >$14.99</a
                        >
                        <p class="card-text">Hosts a beautiful villa in New York</p>
                        <a href="#" class="btn btn-primary" style="border-radius: 0"
                          >Book Now</a
                        >
                      </div>
                    </div>

                    <div class="card" style="background-color: white">
                      <img src="./img/host 2.png" class="card-img-top" />
                      <div class="card-body text-center">
                        <h5 class="card-title text-primary">Lorem Sposum</h5>
                        <a
                          href="#"
                          class="btn btn-outline-secondary"
                          style="border-radius: 20px"
                          >$14.99</a
                        >
                        <p class="card-text">Hosts a beautiful villa in New York</p>
                        <a href="#" class="btn btn-primary" style="border-radius: 0"
                          >Book Now</a
                        >
                      </div>
                    </div>

                    <div class="card" style="background-color: white">
                      <img src="./img/host 3.png" class="card-img-top" />
                      <div class="card-body text-center">
                        <h5 class="card-title text-primary">Lorem Sposum</h5>
                        <a
                          href="#"
                          class="btn btn-outline-secondary"
                          style="border-radius: 20px"
                          >$14.99</a
                        >
                        <p class="card-text">Hosts a beautiful villa in New York</p>
                        <a href="#" class="btn btn-primary" style="border-radius: 0"
                          >Book Now</a
                        >
                      </div>
                    </div>

                    <div class="card" style="background-color: white">
                      <img src="./img/host 4.png" class="card-img-top" />
                      <div class="card-body text-center">
                        <h5 class="card-title text-primary">Lorem Sposum</h5>
                        <a
                          href="#"
                          class="btn btn-outline-secondary"
                          style="border-radius: 20px"
                          >$14.99</a
                        >
                        <p class="card-text">Hosts a beautiful villa in New York</p>
                        <a href="#" class="btn btn-primary" style="border-radius: 0"
                          >Book Now</a
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mt-5">
                  <div class="slider">
                    <div class="card" style="background-color: white">
                      <img src="./img/host1.png" class="card-img-top" />
                      <div class="card-body text-center">
                        <h5 class="card-title text-primary">Lorem Sposum</h5>
                        <a
                          href="#"
                          class="btn btn-outline-secondary"
                          style="border-radius: 20px"
                          >$14.99</a
                        >
                        <p class="card-text">Hosts a beautiful villa in New York</p>
                        <a href="#" class="btn btn-primary" style="border-radius: 0"
                          >Book Now</a
                        >
                      </div>
                    </div>

                    <div class="card" style="background-color: white">
                      <img src="./img/host 2.png" class="card-img-top" />
                      <div class="card-body text-center">
                        <h5 class="card-title text-primary">Lorem Sposum</h5>
                        <a
                          href="#"
                          class="btn btn-outline-secondary"
                          style="border-radius: 20px"
                          >$14.99</a
                        >
                        <p class="card-text">Hosts a beautiful villa in New York</p>
                        <a href="#" class="btn btn-primary" style="border-radius: 0"
                          >Book Now</a
                        >
                      </div>
                    </div>

                    <div class="card" style="background-color: white">
                      <img src="./img/host 3.png" class="card-img-top" />
                      <div class="card-body text-center">
                        <h5 class="card-title text-primary">Lorem Sposum</h5>
                        <a
                          href="#"
                          class="btn btn-outline-secondary"
                          style="border-radius: 20px"
                          >$14.99</a
                        >
                        <p class="card-text">Hosts a beautiful villa in New York</p>
                        <a href="#" class="btn btn-primary" style="border-radius: 0"
                          >Book Now</a
                        >
                      </div>
                    </div>

                    <div class="card" style="background-color: white">
                      <img src="./img/host 2.png" class="card-img-top" />
                      <div class="card-body text-center">
                        <h5 class="card-title text-primary">Lorem Sposum</h5>
                        <a
                          href="#"
                          class="btn btn-outline-secondary"
                          style="border-radius: 20px"
                          >$14.99</a
                        >
                        <p class="card-text">Hosts a beautiful villa in New York</p>
                        <a href="#" class="btn btn-primary" style="border-radius: 0"
                          >Book Now</a
                        >
                      </div>
                    </div>

                    <div class="card" style="background-color: white">
                      <img src="./img/host 3.png" class="card-img-top" />
                      <div class="card-body text-center">
                        <h5 class="card-title text-primary">Lorem Sposum</h5>
                        <a
                          href="#"
                          class="btn btn-outline-secondary"
                          style="border-radius: 20px"
                          >$14.99</a
                        >
                        <p class="card-text">Hosts a beautiful villa in New York</p>
                        <a href="#" class="btn btn-primary" style="border-radius: 0"
                          >Book Now</a
                        >
                      </div>
                    </div>

                    <div class="card" style="background-color: white">
                      <img src="./img/host 4.png" class="card-img-top" />
                      <div class="card-body text-center">
                        <h5 class="card-title text-primary">Lorem Sposum</h5>
                        <a
                          href="#"
                          class="btn btn-outline-secondary"
                          style="border-radius: 20px"
                          >$14.99</a
                        >
                        <p class="card-text">Hosts a beautiful villa in New York</p>
                        <a href="#" class="btn btn-primary" style="border-radius: 0"
                          >Book Now</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-5 margin-div">
              <div class="adventure-section mb-4">
                <h2 class="d-inline pe-1">Feeling Adventures</h2>
                <img src="./img/Group.png" alt="" class="d-inline" />
              </div>

              <div class="slider2">
                <div class="card card-margins" style="background-color: white">
                  <img src="./img/host1.png" class="card-img-top" />
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col-6">
                        <strong>The pure desert experience</strong>
                      </div>
                      <div class="col-6 d-flex justify-content-end">
                        Starting From <br />
                        100$
                      </div>
                    </div>
                    <p class="card-text">
                      Fly now to Japan for as low as 300$ <br />
                      If you book now
                    </p>
                    <a
                      href="#"
                      class="btn btn-primary"
                      style="font-size: 12px; border-radius: 0"
                      >TRAVEL NOW</a
                    >
                  </div>
                </div>

                <div class="card card-margins" style="background-color: white">
                  <img src="./img/host1.png" class="card-img-top" />
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col-6">
                        <strong>The pure desert experience</strong>
                      </div>
                      <div class="col-6 d-flex justify-content-end">
                        Starting From <br />
                        100$
                      </div>
                    </div>
                    <p class="card-text">
                      Fly now to Japan for as low as 300$ <br />
                      If you book now
                    </p>
                    <a
                      href="#"
                      class="btn btn-primary"
                      style="font-size: 12px; border-radius: 0"
                      >TRAVEL NOW</a
                    >
                  </div>
                </div>

                <div class="card card-margins" style="background-color: white">
                  <img src="./img/host1.png" class="card-img-top" />
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col-6">
                        <strong>The pure desert experience</strong>
                      </div>
                      <div class="col-6 d-flex justify-content-end">
                        Starting From <br />
                        100$
                      </div>
                    </div>
                    <p class="card-text">
                      Fly now to Japan for as low as 300$ <br />
                      If you book now
                    </p>
                    <a
                      href="#"
                      class="btn btn-primary"
                      style="font-size: 12px; border-radius: 0"
                      >TRAVEL NOW</a
                    >
                  </div>
                </div>

                <div class="card card-margins" style="background-color: white">
                  <img src="./img/host1.png" class="card-img-top" />
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col-6">
                        <strong>The pure desert experience</strong>
                      </div>
                      <div class="col-6 d-flex justify-content-end">
                        Starting From <br />
                        100$
                      </div>
                    </div>
                    <p class="card-text">
                      Fly now to Japan for as low as 300$ <br />
                      If you book now
                    </p>
                    <a
                      href="#"
                      class="btn btn-primary"
                      style="font-size: 12px; border-radius: 0"
                      >TRAVEL NOW</a
                    >
                  </div>
                </div>

                <div class="card card-margins" style="background-color: white">
                  <img src="./img/host1.png" class="card-img-top" />
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col-6">
                        <strong>The pure desert experience</strong>
                      </div>
                      <div class="col-6 d-flex justify-content-end">
                        Starting From <br />
                        100$
                      </div>
                    </div>
                    <p class="card-text">
                      Fly now to Japan for as low as 300$ <br />
                      If you book now
                    </p>
                    <a
                      href="#"
                      class="btn btn-primary"
                      style="font-size: 12px; border-radius: 0"
                      >TRAVEL NOW</a
                    >
                  </div>
                </div>

                <div class="card card-margins" style="background-color: white">
                  <img src="./img/host1.png" class="card-img-top" />
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col-6">
                        <strong>The pure desert experience</strong>
                      </div>
                      <div class="col-6 d-flex justify-content-end">
                        Starting From <br />
                        100$
                      </div>
                    </div>
                    <p class="card-text">
                      Fly now to Japan for as low as 300$ <br />
                      If you book now
                    </p>
                    <a
                      href="#"
                      class="btn btn-primary"
                      style="font-size: 12px; border-radius: 0"
                      >TRAVEL NOW</a
                    >
                  </div>
                </div>

                <div class="card card-margins" style="background-color: white">
                  <img src="./img/host1.png" class="card-img-top" />
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col-6">
                        <strong>The pure desert experience</strong>
                      </div>
                      <div class="col-6 d-flex justify-content-end">
                        Starting From <br />
                        100$
                      </div>
                    </div>
                    <p class="card-text">
                      Fly now to Japan for as low as 300$ <br />
                      If you book now
                    </p>
                    <a
                      href="#"
                      class="btn btn-primary"
                      style="font-size: 12px; border-radius: 0"
                      >TRAVEL NOW</a
                    >
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-5 margin-div">
              <div class="slider2">
                <div class="card card-margins" style="background-color: white">
                  <img src="./img/host1.png" class="card-img-top" />
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col-6">
                        <strong>The pure desert experience</strong>
                      </div>
                      <div class="col-6 d-flex justify-content-end">
                        Starting From <br />
                        100$
                      </div>
                    </div>
                    <p class="card-text">
                      Fly now to Japan for as low as 300$ <br />
                      If you book now
                    </p>
                    <a
                      href="#"
                      class="btn btn-primary"
                      style="font-size: 12px; border-radius: 0"
                      >TRAVEL NOW</a
                    >
                  </div>
                </div>

                <div class="card card-margins" style="background-color: white">
                  <img src="./img/host1.png" class="card-img-top" />
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col-6">
                        <strong>The pure desert experience</strong>
                      </div>
                      <div class="col-6 d-flex justify-content-end">
                        Starting From <br />
                        100$
                      </div>
                    </div>
                    <p class="card-text">
                      Fly now to Japan for as low as 300$ <br />
                      If you book now
                    </p>
                    <a
                      href="#"
                      class="btn btn-primary"
                      style="font-size: 12px; border-radius: 0"
                      >TRAVEL NOW</a
                    >
                  </div>
                </div>

                <div class="card card-margins" style="background-color: white">
                  <img src="./img/host1.png" class="card-img-top" />
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col-6">
                        <strong>The pure desert experience</strong>
                      </div>
                      <div class="col-6 d-flex justify-content-end">
                        Starting From <br />
                        100$
                      </div>
                    </div>
                    <p class="card-text">
                      Fly now to Japan for as low as 300$ <br />
                      If you book now
                    </p>
                    <a
                      href="#"
                      class="btn btn-primary"
                      style="font-size: 12px; border-radius: 0"
                      >TRAVEL NOW</a
                    >
                  </div>
                </div>

                <div class="card card-margins" style="background-color: white">
                  <img src="./img/host1.png" class="card-img-top" />
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col-6">
                        <strong>The pure desert experience</strong>
                      </div>
                      <div class="col-6 d-flex justify-content-end">
                        Starting From <br />
                        100$
                      </div>
                    </div>
                    <p class="card-text">
                      Fly now to Japan for as low as 300$ <br />
                      If you book now
                    </p>
                    <a
                      href="#"
                      class="btn btn-primary"
                      style="font-size: 12px; border-radius: 0"
                      >TRAVEL NOW</a
                    >
                  </div>
                </div>

                <div class="card card-margins" style="background-color: white">
                  <img src="./img/host1.png" class="card-img-top" />
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col-6">
                        <strong>The pure desert experience</strong>
                      </div>
                      <div class="col-6 d-flex justify-content-end">
                        Starting From <br />
                        100$
                      </div>
                    </div>
                    <p class="card-text">
                      Fly now to Japan for as low as 300$ <br />
                      If you book now
                    </p>
                    <a
                      href="#"
                      class="btn btn-primary"
                      style="font-size: 12px; border-radius: 0"
                      >TRAVEL NOW</a
                    >
                  </div>
                </div>

                <div class="card card-margins" style="background-color: white">
                  <img src="./img/host1.png" class="card-img-top" />
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col-6">
                        <strong>The pure desert experience</strong>
                      </div>
                      <div class="col-6 d-flex justify-content-end">
                        Starting From <br />
                        100$
                      </div>
                    </div>
                    <p class="card-text">
                      Fly now to Japan for as low as 300$ <br />
                      If you book now
                    </p>
                    <a
                      href="#"
                      class="btn btn-primary"
                      style="font-size: 12px; border-radius: 0"
                      >TRAVEL NOW</a
                    >
                  </div>
                </div>

                <div class="card card-margins" style="background-color: white">
                  <img src="./img/host1.png" class="card-img-top" />
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col-6">
                        <strong>The pure desert experience</strong>
                      </div>
                      <div class="col-6 d-flex justify-content-end">
                        Starting From <br />
                        100$
                      </div>
                    </div>
                    <p class="card-text">
                      Fly now to Japan for as low as 300$ <br />
                      If you book now
                    </p>
                    <a
                      href="#"
                      class="btn btn-primary"
                      style="font-size: 12px; border-radius: 0"
                      >TRAVEL NOW</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section id="slider-section">
            <div class="slider3">
              <div class="text-center">
                <h4>TRAVEL NOTES</h4>
                <p>
                  Never let your memories be greater <br />
                  than your dream
                </p>
              </div>

              <div class="text-center">
                <h4>TRAVEL NOTES</h4>
                <p>
                  Never let your memories be greater <br />
                  than your dream
                </p>
              </div>

              <div class="text-center">
                <h4>TRAVEL NOTES</h4>
                <p>
                  Never let your memories be greater <br />
                  than your dream
                </p>
              </div>
            </div>
          </section>

          <!-- Footer Section-->
          @extends('layout.footer');

