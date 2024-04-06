<?php 
    include "../conn.php";
    session_start();

    $email=$_SESSION['email'];

    $customer=mysqli_query($conn,"SELECT * FROM uguy WHERE email='$email'");
        while ($row = mysqli_fetch_object($customer)){

        $fname=$row ->firstname;
           $lname=$row ->lastname;


    }
    $get_id_order=$_GET['id'];
    $orders=mysqli_query($conn,"SELECT * FROM orders WHERE id='$get_id_order'");
        while ($row = mysqli_fetch_object($orders)){

            $customer_fname=$row->customer_firstname;
            $customer_lname=$row->customer_lastname;
            $food_stall=$row->foodstall;
            $price=$row->price;
            $prod_name=$row->productname;
            $phone=$row->phone;
            $room=$row->room;
            $id=$row->id;

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

#foodstall_list{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 400px;
    background-color: ;

}

#foodstall_list div{
    height: 240px;
    width: 240px;
    background: white;
    margin: 60px;
    text-align: center;

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
               
                        <a href="uguy.php" class="nav-link active"  style="color: red;"> <i class="fa fa-bell me-lg-2 "></i>Customer's Order</a>
                        <a href="accepted_order.php" class="nav-link"><i class="fa fa-bell me-lg-2 "></i>Accepted Order </a>
                        <a href="Successfully_delivered.php" class="nav-link"><i class="fa fa-bell me-lg-2 "></i>Successfully Delivered </a>
                    
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

             <h1></h1>
        
               <form action="process_uguy_accept_order.php?id=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
                     <div class="mb-3">
                        <label for="" class="form-label">First Name:</label>
                        <input type="text" class="form-control" name="fname" id="userNameInput" value="<?php echo $customer_fname; ?>" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" name="lname" value="<?php echo $customer_lname;?> " readonly>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Contact Number:</label>
                        <input type="text" class="form-control" name="cnumber"  value="<?php echo $phone;?> " readonly>
                    </div>

                      <div class="mb-3">
                        <label for="" class="form-label">Room Location:</label>
                        <input type="text" class="form-control" name="room"  value="<?php echo $room;?> " readonly>
                    </div>

                      <div class="mb-3">
                        <label for="" class="form-label">Food Stall:</label>
                        <input type="text" class="form-control" name="fs"  value="<?php echo $food_stall;?> " readonly>
                    </div>
          

            <div class="mb-3">
                        <label for="" class="form-label">Product Name:</label>
                        <input type="text" class="form-control" name="pn"  value="<?php echo $prod_name;?> " readonly>
                    </div>
          

            <div class="mb-3">
                        <label for="" class="form-label">Price:</label>
                        <input type="text" class="form-control" name="price"  value="<?php echo $price;?> " readonly>
                    </div>


            <div class="mb-3">
                        <label for="" class="form-label">Delivery U-GUY Firstname:</label>
                        <input type="text" class="form-control" name="dfn"  value="<?php echo $fname;?> " readonly>
                    </div>


            <div class="mb-3">
                        <label for="" class="form-label">Delivery U-GUY Lastname:</label>
                        <input type="text" class="form-control" name="dln"  value="<?php echo $lname;?> " readonly>
                    </div>
            
                   <button type="submit" name="accept_order">Accept Order</button>
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