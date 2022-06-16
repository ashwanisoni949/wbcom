<?php
session_start();
include 'header.php';
// include 'contactController.php';
?>
    <!--  =================================
           banner section 
    ================================  -->
    <section class="banner_wrapper" id="home">
        <!-- <div class="cicle"></div> -->
      <div class="container">
        <div class="row">
          <div class="col-sm-5 text-center text-md-start">
            <h6>Welcome Laragon Website</h6>
            <h1>
             I'am <span class=" text-warning" id="name"> Developer</span> of <span>Jr Web Developer.</span><br />Based in
              India
            </h1>
            <div class="mt-4">
              <a href="register.php" target="_blank" class="main-btn">Register Now</a>
            </div>
          </div>
          <div class="col-sm-5 text-center text-md-center img_box">
            <img src="images/img1.png" alt="" class="startbucks move">
          </div>
          <div class="col-sm-2 text-center text-md-end img_box">
            <ul class="thumb">
                <li><img src="images/thumb1.png"  onclick="imgSlider('images/img1.png')" alt=""></li>
            </ul>
            <ul class="thumb">
                <li><img src="images/thumb1.png" onclick="imgSlider('images/img2.png')" alt=""></li>
            </ul>
            <ul class="thumb">
                <li><img src="images/thumb1.png" onclick="imgSlider('images/img3.png')" alt=""></li>
            </ul>
          </div>
          
        </div>
        
      </div>
    </section>
    <!--  =================================
          about section 
    ================================  -->
    <section class="about_wrapper" id="about">
      <div class="container">
        <div class="row justify-content-between align-item-center">
          <div class="col-lg-5 mb-4 mb-lg-0">
            <img src="images/hgd.jpg"
              class="img-fluid"
              alt="about-us"
            />
          </div>
          <div class="col-lg-7 ps-lg-5 text-center text-lg-start">
            <div class="my-3 mb-lg-0">
              <span class="subtitle">About My Details</span>
              <h2>Name <span class="text-warning">Ashwnai Soni</span></h2>
              <p>I want to make software engineering and dreams that's make biggest project in php frameswork</p>
            </div>
            <div class="pt-4">
              <ul
                class="nav nav-pills justify-content-lg-between justify-content-center mb-3"
                id="pills-tab"
                role="tablist"
              >
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link active"
                    id="pills-skill-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-skill"
                    type="button"
                    role="tab"
                    aria-controls="pills-skill"
                    aria-selected="true"
                  >
                   Score Knowledge
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    id="pills-Award-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-Award"
                    type="button"
                    role="tab"
                    aria-controls="pills-Award"
                    aria-selected="false"
                  >
                    Achievement
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    id="pills-experiance-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-experiance"
                    type="button"
                    role="tab"
                    aria-controls="pills-experiance"
                    aria-selected="false"
                  >Website Make
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    id="pills-education-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-education"
                    type="button"
                    role="tab"
                    aria-controls="pills-education"
                    aria-selected="false"
                  >
                   LINKS
                  </button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div
                  class="tab-pane fade show active"
                  id="pills-skill"
                  role="tabpanel"
                  aria-labelledby="pills-skill-tab"
                >
                  <div class="single-progress">
                    <h6>Designing</h6>
                    <div class="progress">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 95%"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <span class="label">95%</span>
                  </div>
                  <div class="single-progress">
                    <h6>PHP</h6>
                    <div class="progress">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 70%"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <span class="label">70%</span>
                  </div>
                  <div class="single-progress">
                    <h6>Laravel</h6>
                    <div class="progress">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 30%"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <span class="label">20%</span>
                  </div>
                  <div class="single-progress">
                    <h6>Codeiginor</h6>
                    <div class="progress">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 30%"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <span class="label">30%</span>
                  </div>
                  <div class="single-progress">
                    <h6>Wordpress Front</h6>
                    <div class="progress">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 90%"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <span class="label">90%</span>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="pills-Award"
                  role="tabpanel"
                  aria-labelledby="pills-Award-tab"
                >
                  <ul class="text-start ps-0">
                    <li>
                      <a href="#"
                        >Awards.com
                        <span>-Winner</span> </a
                      >2019 - 2020
                    </li>
                    <li>
                      <a href="#"
                        >Awards.com
                        <span>-Winner</span> </a
                      >2019 - 2020
                    </li>
                    <li>
                      <a href="#"
                        >Awards.com
                        <span>-Winner</span> </a
                      >2019 - 2020
                    </li>
                    <li>
                      <a href="#"
                        >Awards.com
                        <span>-Winner</span> </a
                      >2019 - 2020
                    </li>
                  </ul>
                </div>
                <div
                  class="tab-pane fade"
                  id="pills-experiance"
                  role="tabpanel"
                  aria-labelledby="pills-experiance-tab"
                >
                  <ul class="text-start ps-0">
                    <li>
                      <a href="https://javahindi.com" target="_blank"
                        class="text-danger">javhindi.com
                        <span class="text-warning">-Hindi Website-</span> </a
                      >2021 - 2022
                    </li>
                    <li>
                      <a href="https://allsitein.com" target="_blank"
                        class="text-danger">allsitein.com
                        <span class="text-warning">-Hindi Website-</span> </a
                      >2021
                    </li>
                    <li>
                      <a href="https://laragon.net" target="_blank"
                        class="text-danger">laragon.net
                        <span class="text-warning">-Hindi Website-</span> </a
                      >2022
                    </li>
                    <li>
                      <a href="https://c3school.in" target="_blank"
                        class="text-danger">c3school.in
                        <span class="text-warning">-Hindi Website-</span> </a
                      >2020 - 2022
                    </li>
                  </ul>
                </div>
                <div
                  class="tab-pane fade"
                  id="pills-education"
                  role="tabpanel"
                  aria-labelledby="pills-education-tab"
                >
                  <ul class="text-start ps-0">
                    <li>
                      <a href="#"
                        class="text-danger">Telegram
                        <span class="text-warning">JOIN HERE</span> </a
                      >
                    </li>
                    <li>
                      <a href="#"
                        >Awards.com
                        <span>-Winner</span> </a
                      >2019 - 2020
                    </li>
                    <li>
                      <a href="#"
                        >Awards.com
                        <span>-Winner</span> </a
                      >2019 - 2020
                    </li>
                    <li>
                      <a href="#"
                        >Awards.com
                        <span>-Winner</span> </a
                      >2019 - 2020
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  =================================
         service section 
    ================================  -->
    <section id="service" class="services_wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center mb-4">
            <span class="subtitle">What I can do for you</span>
            <h2>My Awesome Service</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br
                class="d-none d-md-block"
              />
              Temporibus aperiam doloremque dolorem beatae consequuntur laborum
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="card-body text-md-start text-center">
                <img
                  src="./images/service/service-1.svg"
                  alt=""
                  class="img-fluid mb-4"
                />
                <h3>Business Stratagy</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Neque iusto laudantium dolores, maxime
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="card-body text-md-start text-center">
                <img
                  src="./images/service/service-1.svg"
                  alt=""
                  class="img-fluid mb-4"
                />
                <h3>Business Stratagy</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Neque iusto laudantium dolores, maxime
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="card-body text-md-start text-center">
                <img
                  src="./images/service/service-2.svg"
                  alt=""
                  class="img-fluid mb-4"
                />
                <h3>Business Stratagy</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Neque iusto laudantium dolores, maxime
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="card-body text-md-start text-center">
                <img
                  src="./images/service/service-3.svg"
                  alt=""
                  class="img-fluid mb-4"
                />
                <h3>Business Stratagy</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Neque iusto laudantium dolores, maxime
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="card-body text-md-start text-center">
                <img
                  src="./images/service/service-4.svg"
                  alt=""
                  class="img-fluid mb-4"
                />
                <h3>Business Stratagy</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Neque iusto laudantium dolores, maxime
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="card-body text-md-start text-center">
                <img
                  src="./images/service/service-4.svg"
                  alt=""
                  class="img-fluid mb-4"
                />
                <h3>Business Stratagy</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Neque iusto laudantium dolores, maxime
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  =================================
       porfolio section 
    ================================  -->
    <section id="portfolio" class="portfolio_wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center mb-4">
            <span class="subtitle">My Complete Project</span>
            <h2>My Latest Project</h2>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.<br
                class="d-none d-md-bloxk"
              />
              Doloremque aspernatur saepe quam deserunt iste suscipit
              perspiciatis reprehenderit
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card p-0">
              <span
                style="background-image: url('./images/portfolio/Foodies.png')"
              ></span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card p-0">
              <span
                style="
                  background-image: url('./images/portfolio/E-Commerce-Website-Using-Bootstap-5.png');
                "
              ></span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card p-0">
              <span
                style="
                  background-image: url('./images/portfolio/Christmas-Landing-Page.png');
                "
              ></span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card p-0">
              <span
                style="
                  background-image: url('./images/portfolio/SEO-Landing-Page.png');
                "
              ></span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card p-0">
              <span
                style="background-image: url('./images/portfolio/Foodies.png')"
              ></span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card p-0">
              <span
                style="background-image: url('./images/portfolio/Foodies.png')"
              ></span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card p-0">
              <span
                style="background-image: url('./images/portfolio/Foodies.png')"
              ></span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card p-0">
              <span
                style="background-image: url('./images/portfolio/Foodies.png')"
              ></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  =================================
       contact section 
    ================================  -->
    <section id="contact" class="contact_wrapper">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 order-2 order-lg-1 pe-lg-5 text-lg-start text-center">
                    <span class="subtitle">Let's Say Hi</span>
                    <h2 class="text-center">Contact <span class="text-warning">Us</span></h2>
                    <div class="row call_details mb-4">
                        <label class="col-sm-3">Call us</label>
                        <div class="col-sm-9 mb-3 mb-lg-2">
                            <a href="javascript:void(0)">+91 9521410162</a>
                        </div>
                        <label class="col-sm-3">Email:</label>
                        <div class="col-sm-9 mb-3 mb-lg-2">
                            <a href="ashwaniverma949@gmail.com">ashwaniverma949@gmail.com</a>
                        </div>
                    </div> 
                    <form>
                        <div class="mb-4">
                            <input type="text" name="name" class="form-control" placeholder="Your Name..." autocomplete="off">
                        </div>
                        <div class="mb-4">
                            <input type="number" name="mobile" class="form-control" placeholder="Your Phone..." autocomplete="off">
                        </div>
                        <div class="mb-4">
                            <input type="email" name="email" class="form-control" placeholder="Your Email..." autocomplete="off">
                        </div>
                        <div class="mb-4">
                            <input cols="40" rows="4" name="message" class="form-control" id="message"
                                placeholder="Write a Message..." autocomplete="off">
                        </div>
                        <button type="submit" name="submit" class="main-btn">Submit</button>
                    </form>
                </div>
                <div class="col-lg-6 order-1 mb-4 order-lg-1 mb-lg-0">
                    <img src="./images/1.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </section>


  <?php
  include 'footer.php';
  ?>