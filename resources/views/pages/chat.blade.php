@extends('layout.navbar')

<section id="header">
    <div class="hero-section">
      <div class="overlay d-flex justify-content-center">
        <div class="align-self-center text-center">
          <h2 class="text-white">Connect With Awesome Travellers</h2>
          <h1>Trust Our Experience</h1>
          <button class="btn py-2">Share Your Thoughts</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Chats Section -->
  <section id="Chats">
    <div class="Chats-section">
      <h2 class="d-inline">Chats</h2>
      <img src="./img/Group.png" alt="" class="d-inline pb-2" />
      <div class="row">
        <div class="col-lg-5">
          <div class="chatting-list">
            <div class="row">
              <div class="col-2">
                <img src="./img/monica.png" width="60px" alt="" />
              </div>
              <div class="col-8 ps-4">
                <p class="d-inline name">
                  <strong>Monica Geller</strong>
                </p>
                <p class="pt-2 small-text">
                  Hey What's up joey? are you <br />
                  coming tonight
                </p>
              </div>
              <div class="col-2">
                <p><strong>9.00</strong></p>
                <p class="ps-2">
                  <img
                    src="./img/unread-messages-2.png"
                    width="20px"
                    alt=""
                  />
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-10 offset-2">
                <hr />
              </div>
            </div>

            <div class="row">
              <div class="col-2">
                <img src="./img/james.png" width="60px" alt="" />
              </div>
              <div class="col-8 ps-4">
                <p class="d-inline blue-text name">
                  <strong>James Anderson</strong>
                </p>
                <p class="pt-2 small-text">
                  Hey What's up joey? are you <br />
                  coming tonight
                </p>
              </div>
              <div class="col-2">
                <p class="blue-text"><strong>9.00</strong></p>
              </div>
            </div>
            <div class="row">
              <div class="col-10 offset-2">
                <hr />
              </div>
            </div>

            <div class="row">
              <div class="col-2">
                <img src="./img/penny.png" width="60px" alt="" />
              </div>
              <div class="col-8 ps-4">
                <p class="d-inline name">
                  <strong>Penny Buffay</strong>
                </p>
                <p class="pt-2 small-text">
                  Hey What's up joey? are you <br />
                  coming tonight
                </p>
              </div>
              <div class="col-2">
                <p><strong>9.00</strong></p>
                <p class="ps-2">
                  <img
                    src="./img/unread-messages-5.png"
                    width="20px"
                    alt=""
                  />
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-10 offset-2">
                <hr />
              </div>
            </div>

            <div class="row">
              <div class="col-2">
                <img src="./img/Janice.png" width="60px" alt="" />
              </div>
              <div class="col-8 ps-4">
                <p class="d-inline name">
                  <strong>Janice Watson</strong>
                </p>
                <p class="pt-2 small-text">
                  Hey What's up joey? are you <br />
                  coming tonight
                </p>
              </div>
              <div class="col-2">
                <p><strong>9.00</strong></p>
              </div>
            </div>
            <div class="row">
              <div class="col-10 offset-2">
                <hr />
              </div>
            </div>

            <div class="row">
              <div class="col-2">
                <img src="./img/danny.png" width="60px" alt="" />
              </div>
              <div class="col-8 ps-4">
                <p class="d-inline name">
                  <strong>Dannny Mcgreggor</strong>
                </p>
                <p class="pt-2 small-text">
                  Hey What's up joey? are you <br />
                  coming tonight
                </p>
              </div>
              <div class="col-2">
                <p><strong>9.00</strong></p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="chatting-list">
            <div class="row">
              <div class="col-1">
                <img src="./img/james.png" width="55px" alt="" />
                <p class="ms-2 ps-1 pt-1">9.00</p>
              </div>
              <div class="col-8 ps-5 col-sm-6">
                <div class="grey-background">
                  <p>Hey What's up joey?</p>
                </div>
              </div>
            </div>

            <div class="row mt-2">
              <div class="col-10 offset-1 ps-5">
                <div class="grey-background">
                  <p>
                    Waiting for your reply, As I have to go back soon. I have
                    to travel long distance.
                  </p>
                </div>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-8 offset-4 offset-sm-4 col-sm-8">
                <div class="green-background">
                  <p>
                    Waiting for your reply, As I have to go back soon. I have
                    to travel long distance.
                  </p>
                </div>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-1">
                <img src="./img/james.png" width="55px" alt="" />
                <p class="ms-2 ps-1 pt-1">9.00</p>
              </div>
              <div class="col-8 ps-5 col-sm-6">
                <div class="grey-background">
                  <p>Hey What's up joey?</p>
                </div>
              </div>
            </div>

            <div class="row mt-2">
              <div class="col-10 offset-1 ps-5">
                <div class="grey-background">
                  <p>
                    Waiting for your reply, As I have to go back soon. I have
                    to travel long distance.
                  </p>
                </div>
              </div>
            </div>

            <div class="row chat-sending mt-4">
              <div class="col-1 text-center">
                <i
                  class="far fa-smile text-secondary"
                  style="cursor: pointer"
                ></i>
              </div>
              <div class="col-10">
                <input type="text" placeholder="Type your message here..." />
              </div>
              <div class="col-1 text-end text-primary">
                <i class="fas fa-paper-plane" style="cursor: pointer"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @extends('layout.footer')

