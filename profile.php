<?php
session_start();

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}

?>
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>FreeAwoof</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="styles/vendor/aos/aos.css" rel="stylesheet">
        <link href="styles/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="styles/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="styles/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="styles/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="styles/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="styles/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!--Css File-->
        <link href="styles/css/profile.css" rel="stylesheet">

    </head>
   
    <body>

        <header id="header" class="fixed-top">

            <div class="container d-flex align-items-center">
      
                <h1 class="logo me-auto"><a href="userpage.html">FreeAwoof</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          
                <nav id="navbar" class="navbar">
                  <ul>
                    <li><a class="nav-link scrollto" href="userpage.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="#packages">Packages</a></li>
                    <li><a class="nav-link scrollto" href="winners.php">Winners</a></li>
                    <li><a class="nav-link scrollto active" href="profile.html">Profile</a></li>
                    <li><a class="getstarted scrollto" href="index.php">signout</a></li>
                  </ul>
                  <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
          
              </div>

        </header>

        <main>

            <section id="hero1" class="d-flex align-items-center">

                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                      <h1>FreeAwoof Giveaway</h1>
                      <h2>Welcome to FreeAwoof Giveaway platform. We have lots of giveaway prices up for grabs.</h2>
                      <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#packages" class="btn-get-started scrollto">Start Wining</a>
                      </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                      <img src="images/profile-pic-animated.svg" class="img-fluid animated" id="svg" alt="">
                    </div>
                  </div>
                </div>
    
            </section>

            <section id="form-ads" class="form-ads">

                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                      <h2>Profile Update</h2>
                    </div>

                    <div class="row justify-content-center">
                      
                      <form action="" class="signup-form" method="post">

                        <div class="mb-3 validate-input">

                            <input type="text" class="form-control" name="name" placeholder="name">
                            <span class="focus-muse10"></span>

                        </div>

                        <div class="mb-3 validate-input">

                            <input type="text" class="form-control" name="surname" placeholder="surname">
                            <span class="focus-muse10"></span>

                        </div>

                        <div class="mb-3 validate-input">

                            <input type="email.com" class="form-control" name="email" placeholder="enter email">
                            <span class="focus-muse10"></span>

                        </div>

                        <div class="mb-3 validate-input">

                            <input type="tel" class="form-control" name="phone" placeholder="phone number">
                            <span class="focus-muse10"></span>

                        </div>

                        <div class="mb-3 validate-input">

                            <select class="form-control" style="font-family: Jost, sans-serif; font-size: 15px; font-weight: bold; color: #001e2cab;">
                              <option value="0">network provider</option>
                              <option value="1">Mtn</option>
                              <option value="2">Glo</option>
                              <option value="3">Airtel</option>
                              <option value="4">9mobile</option>
                            </select>

                        </div>

                        <div class="mb-3 validate-input">

                            <input type="text" class="form-control" name="account-number" placeholder="account number">
                            <span class="focus-muse10"></span>

                        </div>

                        <div class="mb-3 validate-input">

                            <input type="tel" class="form-control" name="bank" placeholder="bank name">
                            <span class="focus-muse10"></span>

                        </div>

                        <div class="form-cliq-button">

                            <button class="muse-btn"> <a class="update" href="">Update</a></button>

                        </div>

                      </form>

                    </div>
                  
                </div>

            </section>

        </main>

        <footer id="footer">

          <div class="footer-newsletter">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-6">
                  <h4>Join Our Newsletter</h4>
                  <p>Subscribe to our newsletter and get exclusive updates on packages weekly</p>
                  <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Subscribe">
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="footer-top">
            <div class="container">
              <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                  <h3>FreeAwoof</h3>
                  <div class="social-links mt-3">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  </div>
                  <br/>
                  <p>
                    <strong>Email:</strong> freeawoof247@gmail.com<br>
                  </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#packages">Packages</a></li>
                  </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Learn</h4>
                  <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">FAQs</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">How FreeAwoof works</a></li>
                  </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Share Link</h4>
                  <p>Share our links to stand a better chance of wining our awoof giveaways and help others know about this beautiful opportunities </p>
                    <div class="social-links mt-2">
                      <a href="#" class="twitter-btn"><i class="bx bxl-twitter"></i></a>
                      <a href="#" class="facebook-btn"><i class="bx bxl-facebook"></i></a>
                      <a href="#" class="whatsapp-btn"><i class="bx bxl-whatsapp"></i></a>
                    </div>
                </div>

              </div>
            </div>
          </div>

          <div class="container footer-bottom clearfix">
            <div class="copyright">
              &copy; Copyright <strong><span>FreeAwoof</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
              Designed by <a href="#">Muse</a>
            </div>
          </div>
        </footer><!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="styles/vendor/aos/aos.js"></script>
        <script src="styles/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="styles/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="styles/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="styles/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="styles/vendor/waypoints/noframework.waypoints.js"></script>
        <script src="styles/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="styles/js/main.js"></script> 
        

    </body>
</html>