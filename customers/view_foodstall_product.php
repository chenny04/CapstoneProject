<?php 
    include "../conn.php";
    session_start();

    $email=$_SESSION['email'];

    $customer=mysqli_query($conn,"SELECT * FROM customers WHERE email='$email'");
        while ($row = mysqli_fetch_object($customer)){        

        $fname=$row ->firstname;
        $lastname=$row ->lastname;

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
                        
                        <span><?php echo $fname; echo " ";echo $lastname;?></span>
                    </div>
                </div>
               
                        <a href="index.php" class="nav-link active"  style="color: red;"> <i class="fa fa-bell me-lg-2 "></i>Food Stalls</a>
                        <a href="order_status.php" class="nav-link"> <i class="fa fa-bell me-lg-2 "></i>Order Status</a>
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
               
                <form class="d-none d-md-flex ms-4" method="GET" action="search_results.php">
    <input class="form-control border-0" type="search" placeholder="Search" name="query">
    <button class="btn btn-primary" type="submit">Search</button>
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


<div id="foodstall_list"  class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">


<?php 


    $get_id=$_GET['id'];
    $product_list_all=mysqli_query($conn,"SELECT * FROM food_products  WHERE  foodstall_name='$get_id' ORDER BY id DESC");
    while($row_product=mysqli_fetch_array($product_list_all)){

?>

    <div class="2">
     <img src="../foodstall/food_product/<?php echo $row_product['product_picture']; ?>" width="100%"; height="100%";>
     <span><?php echo $row_product['product_name']?></span></br>
     <span>Price: Php <?php echo $row_product['price']?></span></br>

     <button ><a href="order_form.php?food_id=<?php echo$row_product['id'] ?>"> Buy</a></button>
     
    </div>

<?php } ?>

</div>


</div>



<div>
<!--This is the modal FOrm of The BUY-->
<div class="modal fade" id="modalBUY" tabindex="-1" aria-labelledby="modalBUY" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal content goes here -->
            <div class="modal-header">
                <h5 class="modal-title" id="modalBUY">ORDER </h5></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form for adding department -->
            
                    <div class="mb-3">
                        <label for="" class="form-label">Customer's Name:</label>
                        <input type="text" class="form-control" name="cn" id="userNameInput">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Contact Number:</label>
                        <input type="text" class="form-control" name="cnumber" id="passwordInput">
                    </div>

                      <div class="mb-3">
                        <label for="" class="form-label">Room Location:</label>
                        <input type="text" class="form-control" name="room" id="passwordInput">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" id="submitDepartmentBtn" name="BUY" class="btn btn-primary">BUY</button>
            </div>
            </form>
        </div>
    </div>
</div>
<

<!--This is the END modal FOrm of The BUY-->


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