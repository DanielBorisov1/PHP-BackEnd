<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>


     <!DOCTYPE html>
     <html>

     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <link rel="stylesheet" href="./assets/css/style.css">


          <!-- Font Awesome icons (free version)-->
          <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

          <!-- Vendor CSS Files -->
          <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
          <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
          <link href="assets/vendor/aos/aos.css" rel="stylesheet">
          <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
          <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">



     </head>

     <body class="index-page">


          <header id="header" class="header sticky-top">

               <div class="topbar d-flex align-items-center">
                    <div class="container d-flex justify-content-center justify-content-md-between">
                         <div class="contact-info d-flex align-items-center">



                              <i class="bi bi-envelope d-flex align-items-center"><a
                                        href="mailto:contact@example.com">contact@example.com</a></i>
                              <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>

                         </div>
                         <div class="social-links d-none d-md-flex align-items-center justify-content-center text-center">
                              <!--   <a href="index.php" class="border-bottom p-1 "><i class="fa-regular fa-user pe-1"></i>Login</a> -->

                              <?php
                              // Check if the user is logged in
                              if (isset($_SESSION['user_name'])) {
                                   echo '<p class=" text-white pt-2 text-center">Hello, ' . htmlspecialchars($_SESSION['user_name']) . '!</p>';
                                   echo '<a href="logout.php"><i class="fa-solid fa-user me-1"></i>Logout</a>';
                              } else {
                                   echo '<a href="index.php">Login</a>';
                              }
                              ?>


                              <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>

                         </div>
                    </div>
               </div><!-- End Top Bar -->

               <div class="branding d-flex align-items-cente">

                    <div class="container position-relative d-flex align-items-center justify-content-between">
                         <a href="index.html" class="logo d-flex align-items-center">
                              <!-- Uncomment the line below if you also wish to use an image logo -->
                              <!-- <img src="assets/img/logo.png" alt=""> -->
                              <h1 class="sitename">Flexor</h1>
                         </a>

                         <nav id="navmenu" class="navmenu">
                              <ul>
                                   <li><a href="#hero" class="active">Home<br></a></li>
                                   <li><a href="#about">About</a></li>
                                   <li><a href="#services">Services</a></li>
                                   <li><a href="#portfolio">Portfolio</a></li>
                                   <li><a href="#team">Team</a></li>
                                   <li><a href="#pricing">Pricing</a></li>
                                   <li><a href="blog.html">Blog</a></li>
                                   <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                                                  class="bi bi-chevron-down toggle-dropdown"></i></a>
                                        <ul>
                                             <li><a href="#">Dropdown 1</a></li>
                                             <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                                                  <ul>
                                                       <li><a href="#">Deep Dropdown 1</a></li>
                                                       <li><a href="#">Deep Dropdown 2</a></li>
                                                       <li><a href="#">Deep Dropdown 3</a></li>
                                                       <li><a href="#">Deep Dropdown 4</a></li>
                                                       <li><a href="#">Deep Dropdown 5</a></li>
                                                  </ul>
                                             </li>
                                             <li><a href="#">Dropdown 2</a></li>
                                             <li><a href="#">Dropdown 3</a></li>
                                             <li><a href="#">Dropdown 4</a></li>
                                        </ul>
                                   </li>
                                   <li><a href="#contact">Contact</a></li>
                              </ul>
                              <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                         </nav>

                    </div>

               </div>

          </header>

          <main class="main">


               <!-- Hero Section -->
               <section id="hero" class="section hero light-background">

                    <div class="container">
                         <div class="row gy-4">
                              <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                                   data-aos="fade-up">
                                   <h1>Bettter digital experience with Ninestars</h1>
                                   <p>We are team of talented designers making websites with Bootstrap</p>
                                   <div class="d-flex">
                                        <a href="index.html#about" class="btn-get-started">Get Started</a>
                                        <a href="https://www.youtube.com/watch?v=vmi5hFi2nzk"
                                             class="glightbox btn-watch-video d-flex align-items-center"><i
                                                  class="bi bi-play-circle"></i><span>Watch Video</span></a>
                                   </div>
                              </div>
                              <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                                   <img src="assets/img/hero-img.svg" class="img-fluid animated" alt="">
                              </div>
                         </div>
                    </div>

               </section><!-- /Hero Section -->

               <!-- Portfolio Section -->
               <section id="portfolio" class="portfolio section">

                    <!-- Section Title -->
                    <div class="container section-title" data-aos="fade-up">
                         <h2>Portfolio</h2>
                         <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                    </div><!-- End Section Title -->

                    <div class="container">

                         <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                              <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                                   <li data-filter="*" class="filter-active">All</li>
                                   <li data-filter=".filter-app">App</li>
                                   <li data-filter=".filter-product">Product</li>
                                   <li data-filter=".filter-branding">Branding</li>
                                   <li data-filter=".filter-books">Books</li>
                              </ul><!-- End Portfolio Filters -->

                              <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                                   <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                                        <div class="portfolio-content h-100">
                                             <img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
                                             <div class="portfolio-info">
                                                  <h4>App 1</h4>
                                                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                                                  <a href="assets/img/portfolio/app-1.jpg" title="App 1"
                                                       data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                                            class="bi bi-zoom-in"></i></a>

                                             </div>
                                        </div>
                                   </div><!-- End Portfolio Item -->

                                   <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                                        <div class="portfolio-content h-100">
                                             <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                                             <div class="portfolio-info">
                                                  <h4>Product 1</h4>
                                                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                                                  <a href="assets/img/portfolio/product-1.jpg" title="Product 1"
                                                       data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                                            class="bi bi-zoom-in"></i></a>

                                             </div>
                                        </div>
                                   </div><!-- End Portfolio Item -->

                                   <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                                        <div class="portfolio-content h-100">
                                             <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                                             <div class="portfolio-info">
                                                  <h4>Branding 1</h4>
                                                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                                                  <a href="assets/img/portfolio/branding-1.jpg" title="Branding 1"
                                                       data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                                            class="bi bi-zoom-in"></i></a>

                                             </div>
                                        </div>
                                   </div><!-- End Portfolio Item -->

                                   <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                                        <div class="portfolio-content h-100">
                                             <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
                                             <div class="portfolio-info">
                                                  <h4>Books 1</h4>
                                                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                                                  <a href="assets/img/portfolio/books-1.jpg" title="Branding 1"
                                                       data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                                            class="bi bi-zoom-in"></i></a>

                                             </div>
                                        </div>
                                   </div><!-- End Portfolio Item -->

                                   <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                                        <div class="portfolio-content h-100">
                                             <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
                                             <div class="portfolio-info">
                                                  <h4>App 2</h4>
                                                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                                                  <a href="assets/img/portfolio/app-2.jpg" title="App 2"
                                                       data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                                            class="bi bi-zoom-in"></i></a>

                                             </div>
                                        </div>
                                   </div><!-- End Portfolio Item -->

                                   <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                                        <div class="portfolio-content h-100">
                                             <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
                                             <div class="portfolio-info">
                                                  <h4>Product 2</h4>
                                                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                                                  <a href="assets/img/portfolio/product-2.jpg" title="Product 2"
                                                       data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                                            class="bi bi-zoom-in"></i></a>

                                             </div>
                                        </div>
                                   </div><!-- End Portfolio Item -->

                                   <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                                        <div class="portfolio-content h-100">
                                             <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
                                             <div class="portfolio-info">
                                                  <h4>Branding 2</h4>
                                                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                                                  <a href="assets/img/portfolio/branding-2.jpg" title="Branding 2"
                                                       data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                                            class="bi bi-zoom-in"></i></a>

                                             </div>
                                        </div>
                                   </div><!-- End Portfolio Item -->

                                   <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                                        <div class="portfolio-content h-100">
                                             <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
                                             <div class="portfolio-info">
                                                  <h4>Books 2</h4>
                                                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                                                  <a href="assets/img/portfolio/books-2.jpg" title="Branding 2"
                                                       data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                                            class="bi bi-zoom-in"></i></a>

                                             </div>
                                        </div>
                                   </div><!-- End Portfolio Item -->

                                   <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                                        <div class="portfolio-content h-100">
                                             <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
                                             <div class="portfolio-info">
                                                  <h4>App 3</h4>
                                                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                                                  <a href="assets/img/portfolio/app-3.jpg" title="App 3"
                                                       data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                                            class="bi bi-zoom-in"></i></a>

                                             </div>
                                        </div>
                                   </div><!-- End Portfolio Item -->

                                   <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                                        <div class="portfolio-content h-100">
                                             <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
                                             <div class="portfolio-info">
                                                  <h4>Product 3</h4>
                                                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                                                  <a href="assets/img/portfolio/product-3.jpg" title="Product 3"
                                                       data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                                            class="bi bi-zoom-in"></i></a>

                                             </div>
                                        </div>
                                   </div><!-- End Portfolio Item -->

                                   <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                                        <div class="portfolio-content h-100">
                                             <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
                                             <div class="portfolio-info">
                                                  <h4>Branding 3</h4>
                                                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                                                  <a href="assets/img/portfolio/branding-3.jpg" title="Branding 2"
                                                       data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                                            class="bi bi-zoom-in"></i></a>

                                             </div>
                                        </div>
                                   </div><!-- End Portfolio Item -->

                                   <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                                        <div class="portfolio-content h-100">
                                             <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
                                             <div class="portfolio-info">
                                                  <h4>Books 3</h4>
                                                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                                                  <a href="assets/img/portfolio/books-3.jpg" title="Branding 3"
                                                       data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                                            class="bi bi-zoom-in"></i></a>

                                             </div>
                                        </div>
                                   </div><!-- End Portfolio Item -->

                              </div><!-- End Portfolio Container -->

                         </div>

                    </div>

               </section><!-- /Portfolio Section -->


          </main>





          <!-- Scroll Top -->
          <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                    class="bi bi-arrow-up-short"></i></a>









          <!-- Vendor JS Files -->
          <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="assets/vendor/php-email-form/validate.js"></script>
          <script src="assets/vendor/aos/aos.js"></script>
          <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
          <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
          <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
          <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>


          <!-- Main JS File -->
          <script src="assets/js/main.js"></script>
     </body>

     </html>

<?php

} else {
     header("Location: index.php");
     exit();
}
?>