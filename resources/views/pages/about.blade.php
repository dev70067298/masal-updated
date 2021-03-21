
@extends('layout.navbar')
<section id="header">
    <div class="hero-section">
      <div class="overlay d-flex justify-content-center">
        <div class="align-self-center text-center">
          <h2 class="text-white">Experience The World With</h2>
          <h1>Awesome Travellers</h1>
          <button class="btn py-2">Get Started</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Info Section -->
  <section id="info-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 d-flex justify-content-center">
          <img src="./img/round-image.png" width="350px" alt="" />
        </div>
        <div class="col-lg-7 ps-3">
          <div class="profile-text">
            <h1 class="pt-2">James Anderson</h1>
            <p>
              Lorem Sposum loremsposum loremsposum loremsposum <br />
              loremsposum loremsposum loremsposum loremsposum<br />
              loremsposum
            </p>
          </div>
          <div class="d-flex profile-edit">
            <div class="row location-icon pe-4">
              <div class="col-2">
                <img src="./img/pin.png" width="35px" height="45px" alt="" />
              </div>
              <div class="col-10 ps-4">
                <p class="d-inline">From <br />United Kingdom</p>
              </div>
            </div>

            <div class="row location-icon">
              <div class="col-2">
                <img
                  src="./img/user-icon.png"
                  width="40px"
                  height="45px"
                  alt=""
                />
              </div>
              <div class="col-10 ps-4">
                <p class="d-inline">From <br />United Kingdom</p>
              </div>
            </div>
          </div>
          <div class="pt-4 profile-button">
            <button class="btn py-2 blue-button">Edit Profile</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Boxes Section -->

  <section id="boxes-section">
    <div class="container">
      <div class="row gx-4">
        <div class="col-md-4 d-flex justify-content-center mb-3">
          <div class="white-box">
            <img src="./img/personal-information.png" alt="" />
            <h6 class="mt-2">
              <strong
                >Personal Info <i class="fas fa-chevron-right"></i
              ></strong>
            </h6>
            <p>Provide personal details and how we can reach you</p>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center mb-3">
          <div class="white-box">
            <img src="./img/login.png" alt="" />
            <h6 class="mt-2">
              <strong
                >Login & Security <i class="fas fa-chevron-right"></i
              ></strong>
            </h6>
            <p>Provide personal details and how we can reach you</p>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center mb-3">
          <div class="white-box">
            <img src="./img/debit-card.png" alt="" />
            <h6 class="mt-2">
              <strong
                >Payments & Payouts <i class="fas fa-chevron-right"></i
              ></strong>
            </h6>
            <p>Provide personal details and how we can reach you</p>
          </div>
        </div>
      </div>

      <div class="row gx-4">
        <div class="col-md-4 d-flex justify-content-center mb-3">
          <div class="white-box">
            <img src="./img/chat.png" alt="" />
            <h6 class="mt-2">
              <strong
                >Notifications <i class="fas fa-chevron-right"></i
              ></strong>
            </h6>
            <p>Provide personal details and how we can reach you</p>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center mb-3">
          <div class="white-box">
            <img src="./img/cloud-computing.png" alt="" />
            <h6 class="mt-2">
              <strong
                >Privacy & Sharing <i class="fas fa-chevron-right"></i
              ></strong>
            </h6>
            <p>Provide personal details and how we can reach you</p>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center mb-3">
          <div class="white-box">
            <img src="./img/configuration.png" alt="" />
            <h6 class="mt-2">
              <strong
                >Global Preferences <i class="fas fa-chevron-right"></i
              ></strong>
            </h6>
            <p>Provide personal details and how we can reach you</p>
          </div>
        </div>
      </div>

      <div class="row gx-4">
        <div class="col-md-4 d-flex justify-content-center mb-3">
          <div class="white-box">
            <img src="./img/plane.png" alt="" />
            <h6 class="mt-2">
              <strong
                >Travel for Work <i class="fas fa-chevron-right"></i
              ></strong>
            </h6>
            <p>Provide personal details and how we can reach you</p>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center mb-3">
          <div class="white-box">
            <img src="./img/home.png" alt="" />
            <h6 class="mt-2">
              <strong
                >Professional Hosting Tools
                <i class="fas fa-chevron-right"></i
              ></strong>
            </h6>
            <p>Provide personal details and how we can reach you</p>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center mb-3">
          <div class="white-box">
            <img src="./img/gift.png" alt="" />
            <h6 class="mt-2">
              <strong
                >Invite Friends <i class="fas fa-chevron-right"></i
              ></strong>
            </h6>
            <p>Provide personal details and how we can reach you</p>
          </div>
        </div>
      </div>
    </div>
  </section>







  @extends('layout.footer')

