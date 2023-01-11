<?php 
  include 'includes/config.php';
  session_start();

  if(isset($_SESSION["user_username"])) {
    header("Location: dashboard.php");
    die();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous" defer></script>
    <link rel="icon" type="image/x-icon" href="./images/jl.png"/>
    <title>DC Universe</title>
  </head>
  <body>
    <!-- navbar -->
    <header>
      <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container-fluid">
          <a class="navbar-brand ps-5" href="#">DC Universe</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navitem">
              <li class="nav-item">
                <a class="nav-link px-4" href="#intro">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-4" href="#creations">Creations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-4" href="#footer">Contacts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-4" href="#login">Connect</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- navbar -->

    <!-- intro section -->
    <section id="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-6 my-auto">
            <div class="text-content">
              <h1>Home to the world's  <span>Greatest Super Heroes</span></h1>
              <h3>DC Comics is one of the largest and oldest American comic book companies, with their first comic under the DC banner being published in 1937.</h3>
            </div>
            <button>Learn More</button>
          </div>
          <div class="col-md-6">
            <img src="./images/dc1.jpg" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- intro section -->

    <!-- login section -->
    <section id="login" class="connect">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="./images/jl.jpg" alt="" />
          </div>
          <div class="col-md-6 my-auto">
            <div class="text-content text-center ps-5">
              <h1 class="fw-bold">Let's Connected <span>Together</span></h1>
              <form action="login.php" method="post">
                <div class="form-element">
                  <input type="text" name="username" id="username" placeholder="username" required />
                </div>
                <div class="form-element">
                  <input type="password" name="password" id="password" placeholder="password" required />
                </div>
                <p>Forgot Your Password?</p>
                <button name="submit" class="login-btn">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- login section -->

    <!-- our creations section -->
    <section id="creations">
      <h1 class="text-center">Our <span>Creations</span></h1>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="my-card">
              <img src="./images/batman1.jpg">
            </div>
          </div>
          <div class="col">
            <div class="my-card">
              <img src="./images/superman.jpg" alt="">
            </div>
          </div>
          <div class="col">
            <div class="my-card">
              <img src="./images/wonder.jpg" alt="">
            </div>
          </div>
          <div class="col">
            <div class="my-card">
              <img src="./images/justice.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="my-card">
              <img src="./images/flash.jpg" alt="">
            </div>
          </div>
          <div class="col">
            <div class="my-card">
              <img src="./images/jlv.jpg" alt="">
            </div>
          </div>
          <div class="col">
            <div class="my-card">
              <img src="./images/arrow.jpg" alt="">
            </div>
          </div>
          <div class="col">
            <div class="my-card">
              <img src="./images/cat.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- our creation section -->

    <!-- footer section -->
    <footer id="footer" class="footer-area">
      <div class="footer-big">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-12">
              <div class="footer-widget">
                <div class="widget-about">
                  <h3>DC <span>Universe</span></h3>
                  <p>DC Comics is one of the largest and oldest American comic book companies, with their first comic under the DC banner being published in 1937.</p>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4">
              <div class="footer-widget">
                <div class="footer-menu footer-menu--1">
                  <h3 class="footer-widget-title">Popular Category</h3>
                  <ul>
                    <li>
                      <a href="#">History</a>
                    </li>
                    <li>
                      <a href="#">Logo</a>
                    </li>
                    <li>
                      <a href="#">Comics</a>
                    </li>
                    <li>
                      <a href="#">Movies</a>
                    </li>
                    <li>
                      <a href="#">Concepts</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4">
              <div class="footer-widget">
                <div class="footer-menu">
                  <h3 class="footer-widget-title">Our Company</h3>
                  <ul>
                    <li>
                      <a href="#">About Us</a>
                    </li>
                    <li>
                      <a href="#">How It Works</a>
                    </li>
                    <li>
                      <a href="#">Affiliates</a>
                    </li>
                    <li>
                      <a href="#">Testimonials</a>
                    </li>
                    <li>
                      <a href="#">Contact Us</a>
                    </li>
                    <li>
                      <a href="#">Plan &amp; Pricing</a>
                    </li>
                    <li>
                      <a href="#">Blog</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4">
              <div class="footer-widget">
                <div class="footer-menu no-padding">
                  <h3 class="footer-widget-title">Help Support</h3>
                  <ul>
                    <li>
                      <a href="#">Support Forum</a>
                    </li>
                    <li>
                      <a href="#">Terms &amp; Conditions</a>
                    </li>
                    <li>
                      <a href="#">Support Policy</a>
                    </li>
                    <li>
                      <a href="#">Refund Policy</a>
                    </li>
                    <li>
                      <a href="#">FAQs</a>
                    </li>
                    <li>
                      <a href="#">Buyers Faq</a>
                    </li>
                    <li>
                      <a href="#">Sellers Faq</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="mini-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright-text">
                <p>
                  © 2022 <a href="#">DC Universe</a>. All rights reserved. Created by
                  <a href="#">magfreezkey</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer section -->
  </body>
</html>