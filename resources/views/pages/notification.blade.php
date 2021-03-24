
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
      integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
      crossorigin="anonymous"
    />
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />

  <link rel="stylesheet" href="{{ asset('css/notifications.css') }}" />
   
    <title>Awesome Travellers</title>
  </head>



@include('layout.navbar')

        <section id="header">
            <div class="hero-section">
              <div class="overlay d-flex justify-content-center">
                <div class="align-self-center text-center">
                  <h2 class="text-white">Get In Touch With Awesome Travellers</h2>
                  <h1>Stay Informed</h1>
                  <button class="btn py-2">Get Started</button>
                </div>
              </div>
            </div>
          </section>

          <!-- Notifications Section -->
          <section id="notifications">
            <div class="notifications-section">
              <h2 class="d-inline">Notifications</h2>
              <img src="./img/Group.png" alt="" class="d-inline pb-2" />
              <div class="notifications-container mt-4">
                <div class="row">
                  <div class="col-3">
                    <div class="dropdown">
                      <button
                        class="btn dropdown-toggle user-dropdown"
                        type="button"
                        id="dropdownMenuButton1"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <img src="./img/user.png" width="45px" alt="" class="user" />
                        <img
                          src="./img/onlineEllipse.png"
                          alt=""
                          class="user-online"
                        />
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                          <a class="dropdown-item" href="#">
                            <img
                              src="./img/user.png"
                              width="45px"
                              alt=""
                              class="user d-inline"
                            />
                            John Doe
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <img
                              src="./img/user.png"
                              width="45px"
                              alt=""
                              class="user d-inline"
                            />
                            Jack Jones
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <img
                              src="./img/user.png"
                              width="45px"
                              alt=""
                              class="user d-inline"
                            />
                            John Smith
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-9">
                    <div class="calendar">
                      <p class="d-inline">11/02/2021</p>
                      <p class="d-inline"><i class="fas fa-calendar-day"></i></p>
                    </div>
                  </div>
                </div>

                <div class="notification-area">
                  <h4>Today</h4>
                  <div class="individual-notification row">
                    <div class="col-10">
                      <i class="fas fa-bell"></i>
                      <img
                        src="./img/notificationDot.png"
                        class="pb-3 d-inline"
                        alt=""
                      />
                      <img
                        src="./img/user.png"
                        width="45px"
                        alt=""
                        class="d-inline ml-4 notification-image"
                      />
                      <p class="d-inline">
                        <strong>Nana Owusu</strong><span> send you a message</span>
                      </p>
                    </div>
                    <div class="col-2 justify-content-end d-flex">
                      <span class="my-2">9:35 am</span>
                    </div>
                  </div>

                  <div class="individual-notification row">
                    <div class="col-10">
                      <i class="fas fa-bell"></i>
                      <img
                        src="./img/notificationDot.png"
                        class="pb-3 d-inline"
                        alt=""
                      />
                      <img
                        src="./img/user.png"
                        width="45px"
                        alt=""
                        class="d-inline ml-4 notification-image"
                      />
                      <p class="d-inline">
                        <strong>Jack Ryan's</strong
                        ><span> updated his latest host prices in his villa</span>
                      </p>
                    </div>
                    <div class="col-2 justify-content-end d-flex">
                      <span class="my-2">7:20 am</span>
                    </div>
                  </div>

                  <div class="individual-notification row">
                    <div class="col-10 py-2">
                      <i class="fas fa-bell"></i>
                      <img
                        src="./img/notificationDot.png"
                        class="pb-3 d-inline"
                        alt=""
                      />
                      <p class="d-inline p-3">
                        <strong class="blue-text">Daily Report</strong
                        ><span> has reached 500 requests for the month</span>
                      </p>
                    </div>
                    <div class="col-2 justify-content-end d-flex">
                      <span class="my-2">3:20 am</span>
                    </div>
                  </div>

                  <h4>Yesterday</h4>
                  <div class="individual-notification row">
                    <div class="col-10">
                      <div class="non-visible d-inline">
                        <i class="fas fa-bell"></i>
                        <img
                          src="./img/notificationDot.png"
                          class="pb-3 d-inline"
                          alt=""
                        />
                      </div>
                      <img
                        src="./img/user.png"
                        width="45px"
                        alt=""
                        class="d-inline ml-4 notification-image"
                      />
                      <p class="d-inline">
                        <strong>Jack Ryan</strong
                        ><span>
                          subscribed to
                          <strong class="blue-text">SMS Notifications </strong>to his
                          notifications</span
                        >
                      </p>
                    </div>
                    <div class="col-2 justify-content-end d-flex">
                      <span class="my-2">9:35 am</span>
                    </div>
                  </div>

                  <div class="individual-notification row">
                    <div class="col-10 py-2">
                      <div class="non-visible d-inline">
                        <i class="fas fa-bell"></i>
                        <img
                          src="./img/notificationDot.png"
                          class="pb-3 d-inline"
                          alt=""
                        />
                      </div>
                      <p class="d-inline p-3">
                        <strong class="blue-text">Email Notifications</strong
                        ><span> has reached 1000 deliveries for the month</span>
                      </p>
                    </div>
                    <div class="col-2 justify-content-end d-flex">
                      <span class="my-2">3:20 am</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          @extends('layout.footer')
