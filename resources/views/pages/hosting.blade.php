@extends('layout.navbar')

<section id="header">
    <div class="hero-section">
      <div class="overlay d-flex justify-content-center">
        <div class="align-self-center text-center">
          <h2 class="text-white">Start Your Hosting Journey With</h2>
          <h1>Awesome Travellers</h1>
          <p class="text-white lead">
            Let's get your listing set up, together
          </p>
          <button class="btn py-2">Get Started</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Hosting Section -->
  <section id="Hosting">
    <div class="Hosting-section">
      <h2 class="d-inline">How Hosting Works</h2>
      <img src="./img/Group.png" alt="" class="d-inline pb-2 group" />

      <div class="row mt-4 mb-5 gx-3">
        <div class="col-lg-3 d-flex justify-content-center mb-4">
          <div class="card" style="width: 18rem">
            <img
              src="./img/rules.png"
              class="card-img-top img-fluid"
              style="height: 200px"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title"><strong>You Make The Rules</strong></h5>
              <p class="card-text text-justify">
                Lorem ipsum dolor sit, amet elit consectetur adipisicing . Et,
                laborum exercitationem? Quasi iusto vero nam illum, magni modi
                necessitatibus quos.
              </p>
              <a href="#" class="btn">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 d-flex justify-content-center mb-4">
          <div class="card" style="width: 18rem">
            <img
              src="./img/schedule.png"
              class="card-img-top img-fluid"
              style="height: 200px"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title"><strong>Set Your Schedule</strong></h5>
              <p class="card-text text-justify">
                Lorem ipsum dolor sit, amet elit consectetur adipisicing . Et,
                laborum exercitationem? Quasi iusto vero nam illum, magni modi
                necessitatibus quos.
              </p>
              <a href="#" class="btn">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 d-flex justify-content-center mb-4">
          <div class="card" style="width: 18rem">
            <img
              src="./img/price.png"
              class="card-img-top img-fluid"
              style="height: 200px"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title"><strong>Set Your Price</strong></h5>
              <p class="card-text text-justify">
                Lorem ipsum dolor sit, amet elit consectetur adipisicing . Et,
                laborum exercitationem? Quasi iusto vero nam illum, magni modi
                necessitatibus quos.
              </p>
              <a href="#" class="btn">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 d-flex justify-content-center mb-4">
          <div class="card" style="width: 18rem">
            <img
              src="./img/guests.png"
              class="card-img-top img-fluid"
              style="height: 200px"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title"><strong>Welcome Your Guests</strong></h5>
              <p class="card-text text-justify">
                Lorem ipsum dolor sit, amet elit consectetur adipisicing . Et,
                laborum exercitationem? Quasi iusto vero nam illum, magni modi
                necessitatibus quos.
              </p>
              <a href="#" class="btn mx-auto">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>

      <h2 class="d-inline">LOREM SPOSUM</h2>
      <img src="./img/Group.png" alt="" class="d-inline pb-2 group" />

      <div class="row pt-5 lorem-sposum">
        <input
          type="text"
          width="100%"
          placeholder="Enter lorem sposum here"
          class="lorem-input"
        />
        <h5>Lorem Sposum</h5>
      </div>

      <div class="row lorem-sposum">
        <input
          type="text"
          width="100%"
          placeholder="Enter lorem sposum here"
          class="lorem-input"
        />
        <h5>Lorem Sposum</h5>
      </div>

      <div class="row lorem-sposum">
        <input
          type="text"
          width="100%"
          placeholder="Enter lorem sposum here"
          class="lorem-input"
        />
        <h5>Lorem Sposum</h5>
      </div>

      <div class="row lorem-sposum">
        <input
          type="text"
          width="100%"
          placeholder="Enter lorem sposum here"
          class="lorem-input"
        />
        <h5>Lorem Sposum</h5>
      </div>

      <div class="terms-conditions">
        <input type="checkbox" name="terms" id="terms" />
        <label for="terms" class="ps-4"
          ><strong>I ACCEPT THE TERMS AND CONDITIONS</strong></label
        >
      </div>

      <div class="d-flex justify-content-center mt-4 mb-5 submit">
        <button class="btn">Submit</button>
      </div>

      <h2 class="d-inline mt-5">WHY CHOOSE AWESOME TRAVELLERS</h2>
      <img src="./img/Group.png" alt="" class="d-inline pb-2 group" />

      <div class="row choosing">
        <div class="col-md-6 mb-3">
          <div class="d-flex justify-content-center">
            <img src="./img/support.png" alt="" />
            <p class="side-text">24/7 Support</p>
          </div>
          <div class="row mt-2 text-center">
            <div
              class="col-10 offset-1 offset-lg-3 col-lg-6 offset-md-2 col-md-8"
            >
              Lorem Sposum loremsposum loremsposum loremsposum loremsposum
              loremsposum loremsposum loremsposum loremsposum loremsposum
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <div class="d-flex justify-content-center">
            <img src="./img/goal.png" alt="" />
            <p class="side-text">Tools For Success</p>
          </div>
          <div class="row mt-2 text-center">
            <div
              class="col-10 offset-1 offset-lg-3 col-lg-6 offset-md-2 col-md-8"
            >
              Lorem Sposum loremsposum loremsposum loremsposum loremsposum
              loremsposum loremsposum loremsposum loremsposum loremsposum
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-3 mt-3">
          <div class="d-flex justify-content-center">
            <img src="./img/thinking.png" height="120px" alt="" />
            <p class="side-text">
              Personalized <br />
              insights
            </p>
          </div>
          <div class="row mt-2 text-center">
            <div
              class="col-10 offset-1 offset-lg-3 col-lg-6 offset-md-2 col-md-8"
            >
              Lorem Sposum loremsposum loremsposum loremsposum loremsposum
              loremsposum loremsposum loremsposum loremsposum loremsposum
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-3 mt-3">
          <div class="d-flex justify-content-center">
            <img src="./img/goal.png" alt="" />
            <p class="side-text">Education and <br />training</p>
          </div>
          <div class="row mt-2 text-center">
            <div
              class="col-10 offset-1 offset-lg-3 col-lg-6 offset-md-2 col-md-8"
            >
              Lorem Sposum loremsposum loremsposum loremsposum loremsposum
              loremsposum loremsposum loremsposum loremsposum loremsposum
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @extends('layout.footer')
