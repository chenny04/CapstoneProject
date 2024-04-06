<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>U-Delivery - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Twerpz
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index2.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="assets/img/logo.jpg" alt="">
        <h1>U-Delivery</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li><li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Register</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li ><a href="#" data-bs-toggle="modal" data-bs-target="#customreg">Customer</a></li>
                  <li><a href="#"  data-bs-toggle="modal" data-bs-target="#foodstallreg">Food Stall</a></li>
                  <li><a href="#"  data-bs-toggle="modal" data-bs-target="#UDelivery">U-guy</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="admindashboard.php"  data-bs-toggle="modal" data-bs-target="#adminlogin">Admin</a></li>
                  <li><a href="customerdashboard.php"  data-bs-toggle="modal" data-bs-target="#customerlogin">Customer</a></li>
                  <li><a href="foodstalldashboard.php" data-bs-toggle="modal" data-bs-target="#foodstalllogin">Food Stall</a></li>
                  <li><a href="uguydashboard.php" data-bs-toggle="modal" data-bs-target="#uguylogin">U-Guy</a></li>
                </ul>
              </li>
            </ul>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#testimonial">Feedback</a></li>
          
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">WELCOME TO<br>U-Delivery: Streamlined Food Ordering System</h2>
          <p data-aos="fade-up" data-aos-delay="180">Enjoy ordering food online while chilling in your respective classrooms and offices!</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#menu" class="btn-book-a-table">Check Our Menu!</a>
        
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start " id="hero">
          <img src="assets/img/ff.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="700">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>Check Our <span>Best Sellers</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>All-Day Breakfast</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Lunch</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-streetfoods">
              <h4>StreetFoods</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-beverages">
              <h4>Beverages</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-snacks">
              <h4>Snacks</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Budget/Value Meal</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/hot.jpg" class="glightbox"><img src="assets/img/menu/hotsilog.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Hotdog</h4>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/tap.jpg" class="glightbox"><img src="assets/img/menu/tap.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Tapa</h4>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/tos.jpg" class="glightbox"><img src="assets/img/menu/tos.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Tocino</h4>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/cor.jpg" class="glightbox"><img src="assets/img/menu/cor.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Corned Beef</h4>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/lun.jpg" class="glightbox"><img src="assets/img/menu/lun.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Luncheon Meat</h4>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/lun.jpg" class="glightbox"><img src="assets/img/menu/lon.webp" class="menu-img img-fluid" alt=""></a>
                <h4>Longganisa</h4>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Lunch</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/por.jpg" class="glightbox"><img src="assets/img/menu/por.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Pork Adobo</h4>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/fc.webp" class="glightbox"><img src="assets/img/menu/fc.webp" class="menu-img img-fluid" alt=""></a>
                <h4>Fried Chicken</h4>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/pot.JPG" class="glightbox"><img src="assets/img/menu/pot.JPG" class="menu-img img-fluid" alt=""></a>
                <h4>Potchero</h4>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/cc.jpg" class="glightbox"><img src="assets/img/menu/cc.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Chicken Curry</h4>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/bbq.jpg" class="glightbox"><img src="assets/img/menu/bbq.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Pork BBQ</h4>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/ff.jpg" class="glightbox"><img src="assets/img/menu/ff.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Fried Fish</h4>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-streetfoods">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>StreetFoods</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/fb.jpg" class="glightbox"><img src="assets/img/menu/fb.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Fishball</h4>
              </div>
              <!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/mai.webp" class="glightbox"><img src="assets/img/menu/mai.webp" class="menu-img img-fluid" alt=""></a>
                <h4>Siomai</h4>
              </div>
              <!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/cd.jpg" class="glightbox"><img src="assets/img/menu/cd.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Corndog</h4>
              </div>
              <!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/fries.jpg" class="glightbox"><img src="assets/img/menu/fries.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>French Fries</h4>
              </div>
              <!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/kik.jpg" class="glightbox"><img src="assets/img/menu/kik.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Kikiam</h4>
              </div>
              <!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/sb.jpg" class="glightbox"><img src="assets/img/menu/sb.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Squid Ball</h4>
              </div>
              <!-- Menu Item -->

            </div>
          </div><!-- End Lunch Menu Content -->

          <div class="tab-pane fade" id="menu-beverages">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Beverages</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/wat.png" class="glightbox"><img src="assets/img/menu/wat.png" class="menu-img img-fluid" alt=""></a>
                <h4>Bottled Water </h4>
              </div>
              <!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/coke.webp" class="glightbox"><img src="assets/img/menu/coke.webp" class="menu-img img-fluid" alt=""></a>
                <h4>Coke</h4>
              </div>
              <!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dew.jpg" class="glightbox"><img src="assets/img/menu/dew.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Mountain Dew</h4>
              </div>
              <!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/cof.jpg" class="glightbox"><img src="assets/img/menu/cof.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Hot Coffee</h4>
              </div>
              <!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/ic.jpg" class="glightbox"><img src="assets/img/menu/ic.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>iced Coffee</h4>
              </div>
              <!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/shake.jpg" class="glightbox"><img src="assets/img/menu/shake.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Shakes (Regular)</h4>
              </div>
              <!-- Menu Item -->


            </div>
          </div><!-- End Dinner Menu Content -->

          <div class="tab-pane fade" id="menu-snacks">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Snacks</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/spag.jpg" class="glightbox"><img src="assets/img/menu/spag.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Spaghetti</h4>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/pc.jpg" class="glightbox"><img src="assets/img/menu/pc.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Pancake</h4>
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/hb.jpg" class="glightbox"><img src="assets/img/menu/hb.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Hotdog Bun</h4>
              </div>
              <!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/car.jpg" class="glightbox"><img src="assets/img/menu/car.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Carbonara</h4>
              </div>
              <!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/bm.jpg" class="glightbox"><img src="assets/img/menu/bm.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Baked Mac</h4>
              </div>
              <!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/sand.jpg" class="glightbox"><img src="assets/img/menu/sand.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Sandwich</h4>
              </div>
              <!-- Menu Item -->

            </div>
          </div>
          <!-- End Breakfast Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->


    <!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <p><span>About Us</span></p>
    </div>

    <div class="row gy-4">
      <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/ff.jpg); background-repeat: no-repeat; width: 600px;"
       data-aos="fade-up" data-aos-delay="150">
       
      </div>
      <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
        <div class="content ps-0 ps-lg-5">
          <p class="fst-italic">
            This website is an automated process of food ordering in the canteen. In this website, you can order foods in the canteen by just using your gadgets 
            (phones, laptops, tablets, ipad, etc.).
          </p>
          <ul>
            <p>Customers can enjoy food service by:</p>
            <li><i class="bi bi-check2-all"></i>Avoiding long waits and confusions.</li>
            <li><i class="bi bi-check2-all"></i>Owners can enjoy better management and lessen errors.</li>
            <li><i class="bi bi-check2-all"></i>Easy and quick service.</li>
          </ul>
          <p>
            This system revolves around a user-centric system that aims to simplify the ordering process, enabling customers to effortlessly explore menus, personalize orders, and 
            securely complete payments. It has features which makes it convenient for customers.
          </p>
         

         
        </div>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

 <!-- ======= testimonial Section ======= -->
 <section id="testimonial" class="testimonial">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>FEEDBACK</h2>
      <p>Having Issues With Our Website?</br></p>
    </div>

    <div class="row gy-4">
      <div class="col-md-6">
        <div class="info-item d-flex align-items-center">
          <i class="icon bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Email Us</h3>
            <p>twerpz1429@gmail.com</p>
          </div>
        </div>
      </div><!-- End Info Item -->
    </div>

    <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
      <div class="row">
        <div class="col-xl-6 form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
        </div>
        <div class="col-xl-6 form-group">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
        </div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
      </div>
      <div class="form-group">
        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
      </div>
      <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
      </div>
      <div class="text-center"><button type="submit">Send Message</button></div>
    </form><!--Testimonial Form -->

  </div>
</section><!-- End Testimonial Section -->

<!-- Admin -->
<div class="modal fade" id="adminlogin" data-bs-backdrop="static" data-bs-keyboard="false"
 tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <form action="process.php" method="POST">

          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-envelope-at"></i></i></span>
            <input type="text" class="form-control" name="email" required placeholder="Email" aria-describedby="addon-wrapping">
          </div></br>

          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-key"></i></i></span>
            <input type="password" class="form-control" name="pass" required placeholder="Password" id="myInputAdmin" >
          </div>
          <input type="checkbox" onclick="myFunctionAdmin()">Show Password

          <script>
            function myFunctionAdmin() {
              var x = document.getElementById("myInputAdmin");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            }
            </script>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
        <input type="submit" class="btn btn-warning" name="admin_login" value="LOGIN">
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Customer Login -->
<div class="modal fade" id="customerlogin" data-bs-backdrop="static" data-bs-keyboard="false"
 tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <form action="process.php" method="POST">

          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-envelope-at"></i></i></span>
            <input type="text" class="form-control" required placeholder="PHINMA Email" name="phinmaemail" aria-describedby="addon-wrapping">
          </div></br>

          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-key"></i></i></span>
            <input type="password" class="form-control" name="pass" required placeholder="Password" id="myInputCustomer">
          </div>
            <input type="checkbox" onclick="myFunctionFS()">Show Password

          <script>
            function myFunctionFS() {
              var x = document.getElementById("myInputCustomer");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            }
            </script>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
        <input type="submit" class="btn btn-warning" name="login" value="LOGIN">
      </div>
       </form>
    </div>
  </div>
</div>

<!-- Food Stall Login -->
<div class="modal fade" id="foodstalllogin" data-bs-backdrop="static" data-bs-keyboard="false"
 tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <form action="process.php" method="POST">

          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-envelope-at"></i></i></span>
            <input type="text" class="form-control" required placeholder="Email" name="email" aria-describedby="addon-wrapping">
          </div></br>

          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-key"></i></i></span>
            <input type="password" class="form-control" name="pass" required placeholder="Password" id="myInputFS">
          </div>
            <input type="checkbox" onclick="myFunctionFS()">Show Password

          <script>
            function myFunctionFS() {
              var x = document.getElementById("myInputFS");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            }
            </script>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
        <input type="submit" class="btn btn-warning" name="login_foodstall" value="LOGIN">
      </div>
        </form>
    </div>

  </div>
</div>


<!-- U Guy Login -->
<div class="modal fade" id="uguylogin" data-bs-backdrop="static" data-bs-keyboard="false"
 tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <form action="process.php" method="POST">

          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-envelope-at"></i></i></span>
            <input type="text" class="form-control" required placeholder="Email" name="email" aria-describedby="addon-wrapping">
          </div></br>

          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-key"></i></i></span>
            <input type="password" class="form-control" name="pass" required placeholder="Password" id="myInputUguy">
          </div>
            <input type="checkbox" onclick="myFunctionFS()">Show Password

          <script>
            function myFunctionFS() {
              var x = document.getElementById("myInputUguy");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            }
            </script>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
        <input type="submit" class="btn btn-warning" name="loginuguy" value="LOGIN">
        
        </form>
      </div>
    </div>
  </div>
</div>

<!--Customer Registration-->
<div class="modal fade" id="customreg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="process.php" method="POST">

        <div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person"></i></i></span>
  <input type="text" class="form-control" name ="ln" required placeholder="LastName"  aria-describedby="addon-wrapping">
</div></br>

<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person"></i></i></span>
  <input type="text" class="form-control" name ="fn" required placeholder="FirstName" aria-describedby="addon-wrapping">
</div></br>

<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-badge"></i></i></span>
  <input type="text" class="form-control"name ="studnumber" required placeholder="Student Number" aria-describedby="addon-wrapping">
</div></br>

<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-lines-fill"></i></i></span>
  <input type="text" class="form-control" name ="cn" required placeholder="Contact" aria-describedby="addon-wrapping">
</div></br>

    <div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><i class="bi bi-list-ul"></i></i></span>
  <select class="form-select" id="inputGroupSelect01" name ="department" required >
    <option selected>Department</option>
    <option value="CITE">CITE</option>
    <option value="CAS">CAS</option>
    <option value="CAHS">CAHS</option>
    <option value="CCJE">CCJE</option>
    <option value="COA">COA</option>
    <option value="COE">COE</option>
    <option value="CoEd">CoEd</option>
    <option value="COM">COM</option>
    <option value="CSDL">CSDL</option>
    <option value="SOG">SOG</option>
  </select>
</div></br>

<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><i class="bi bi-envelope-at"></i></i></span>
  <input type="email" class="form-control"name ="phinmaemail"  required placeholder="PHINMA Email" aria-describedby="addon-wrapping">
</div></br>

<div class="input-group flex-nowrap">
  <span class="input-group-text" id="password"><i class="bi bi-key"></i></i></span>
  <input type="password" class="form-control" name ="pass" required placeholder="Password" id="myInput1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
</div>
<input type="checkbox" onclick="myFunction1()">Show Password </p>

<script>
function myFunction1() {
  var x = document.getElementById("myInput1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
        <input type="submit" class="btn btn-warning" name="reg" value="REGISTER">
      </div>
      </form>
    </div>
  </div>
</div>
</div>

<!--U-Guy Registration-->
<div class="modal fade" id="UDelivery"  aria-labelledby="modaluguy" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="modaluguy">Create Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
      </div>
      <div class="modal-body">
        
        
     <form action="process.php" method="POST">
        <div class="input-group flex-nowrap">
     
  <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person"></i></i></span>
  <input type="text" class="form-control" name ="ln" required placeholder="LastName"  aria-describedby="addon-wrapping">
</div></br>

<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person"></i></i></span>
  <input type="text" class="form-control" name ="fn" required placeholder="FirstName" aria-describedby="addon-wrapping">
</div></br>

<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-badge"></i></i></span>
  <input type="text" class="form-control"name ="studnumber" required placeholder="Student Number" aria-describedby="addon-wrapping">
</div></br>

<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-lines-fill"></i></i></span>
  <input type="text" class="form-control" name ="cn" required placeholder="Contact" aria-describedby="addon-wrapping">
</div></br>

    <div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><i class="bi bi-list-ul"></i></i></span>
  <select class="form-select" id="inputGroupSelect01" name ="department" required >
    <option selected>Department</option>
    <option value="CITE">CITE</option>
    <option value="CAS">CAS</option>
    <option value="CAHS">CAHS</option>
    <option value="CCJE">CCJE</option>
    <option value="COA">COA</option>
    <option value="COE">COE</option>
    <option value="CoEd">CoEd</option>
    <option value="COM">COM</option>
    <option value="CSDL">CSDL</option>
    <option value="SOG">SOG</option>
  </select>
</div></br>

<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><i class="bi bi-envelope-at"></i></i></span>
  <input type="email" class="form-control"name ="phinmaemail"  required placeholder="PHINMA Email" aria-describedby="addon-wrapping">
</div></br>

<div class="input-group flex-nowrap">
  <span class="input-group-text" id="password"><i class="bi bi-key"></i></i></span>
  <input type="password" class="form-control" name ="pass" required placeholder="Password" id="myInput1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
</div>
<input type="checkbox" onclick="myFunction1()">Show Password </p>

<script>
function myFunction1() {
  var x = document.getElementById("myInput1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
        <input type="submit" class="btn btn-warning" name="reg_uguy" value="REGISTER">
      </div>
      </form>
    </div>
  </div>
</div>




  </main><!-- End #main -->



  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              University of Iloilo - Rizal St, Iloilo City Proper, Iloilo City<br>
              5000 Iloilo<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 7:30AM</strong> - 4PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          </div>
        </div>

      </div>
    </div>


    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>U-Delivery</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">TWERPZ</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

    <!--Food Stall Registration-->
<div class="modal fade" id="foodstallreg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="process.php" method="POST" enctype="multipart/form-data">

          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-image"></i></i></span>Food Stall Logo</br>
            <input type="file" name="picture" required placeholder="Food Stall Logo" required accept="gif, jpeg, png, jpg, webp, jfif">
          </div></br>

        <div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person"></i></i></span>
  <input type="text" class="form-control" name ="fsn" required placeholder="Food Stall Name"  aria-describedby="addon-wrapping">
</div></br>

<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-lines-fill"></i></i></span>
  <input type="text" class="form-control" name ="cn" required placeholder="Contact Number" aria-describedby="addon-wrapping">
</div></br>

<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><i class="bi bi-envelope-at"></i></i></span>
  <input type="email" class="form-control"name ="email"  required placeholder="Email" aria-describedby="addon-wrapping">
</div></br>

<div class="input-group flex-nowrap">
  <span class="input-group-text" id="password"><i class="bi bi-key"></i></i></span>
  <input type="password" class="form-control" name ="pass" required placeholder="Password" id="myInput1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
</div>
<input type="checkbox" onclick="myFunction1()">Show Password </p>

<script>
function myFunction1() {
  var x = document.getElementById("myInput1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
        <input type="submit" class="btn btn-warning" name="food_stall_reg" value="REGISTER">
      </div>
      </form>
    </div>
  </div>
</div>


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>





  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

   

</body>

</html>