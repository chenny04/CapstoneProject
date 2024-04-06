<?php 
    include "../conn.php";
    session_start();

    $email=$_SESSION['email'];

    $customer=mysqli_query($conn,"SELECT * FROM customers WHERE email='$email'");
        while ($row = mysqli_fetch_object($customer)){
        
        $fname=$row ->firstname;
        $lname=$row ->lastname;


    }



    $get_id=$_GET['food_id'];
    $product_list_all=mysqli_query($conn,"SELECT * FROM food_products  WHERE  id='$get_id' ORDER BY id DESC");
    while($row_product=mysqli_fetch_object($product_list_all)){


        $product_name=$row_product ->product_name;
        $price=$row_product->price;
        $foodstall=$row_product->foodstall_name;


}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $fname; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style type="text/css">
    .card__article {
  width: 300px; /* Remove after adding swiper js */
  border-radius: 1.25rem;
  overflow: hidden;
  height: 155px;
}


.card__data {
  background-color: white;
  padding: 1.5rem 2rem;
  border-radius: 1rem;
  text-align: center;
  position: relative;
  z-index: 10;
}


.card__shadow {
  width: 200px;
  height: 200px;
  background-color: var(--first-color-alt);
  border-radius: 50%;
  position: absolute;
  top: 3.75rem;
  left: 0;
  right: 0;
  margin-inline: auto;
  filter: blur(45px);
}

.card__name {
  font-size: var(--h2-font-size);
  color: var(--second-color);
  margin-bottom: .75rem;
}

.card__description {
  font-weight: 500;
  margin-bottom: 1.75rem;
}

.card__button {
  display: inline-block;
  padding: .55rem 1.5rem;
  border-radius: .25rem;
  color: var(--dark-color);
  font-weight: 600;
}
</style>

<body>

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="customerdashboard.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary, color: red;">Customer's Page</i></h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        
                        <span><?php echo $fname; echo " ";echo $lname;?></span>
                    </div>
                </div>
               
                        <a href="index.php" class="nav-link active"  style="color: red;"> <i class="fa fa-bell me-lg-2 "></i>Food Stalls</a>
                        <a href="order_status.php" class="nav-link"><i class="fa fa-bell me-lg-2 "></i>Order Status</a>
                        <a href="delivered_history.php" class="nav-link"><i class="fa fa-bell me-lg-2 "></i>Delivered History</a>
                      

                    
                        </div>
                    </div>
                    
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/logo.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Account</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="../logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

                <h1><?php echo $product_name;?></h1>
        
               <form action="customer_process.php?food=<?php echo  $get_id;?>" method="POST" enctype="multipart/form-data">
                     <div class="mb-3">
                        <label for="" class="form-label">First Name:</label>
                        <input type="text" class="form-control" name="cn" id="userNameInput" value="<?php echo $fname; ?>" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" name="lname" value="<?php echo $lname;?> " readonly>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Contact Number:</label>
                        <input type="text" class="form-control" name="cnumber" id="passwordInput">
                    </div>

                      <div class="mb-3">
                        <label for="" class="form-label">Room Location:</label>
                        <input type="text" class="form-control" name="room" id="passwordInput">
                    </div>
          
                   <button type="submit" id="submitDepartmentBtn" name="BUY" class="btn btn-primary">BUY</button>
            </form>
        

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">U-Delivery</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">Twerpz</a>
                       
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="customerdashboard.html" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>