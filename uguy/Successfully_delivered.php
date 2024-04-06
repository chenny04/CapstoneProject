<?php 
    include "../conn.php";
    session_start();

    $email=$_SESSION['email'];

    $customer=mysqli_query($conn,"SELECT * FROM uguy WHERE email='$email'");
        while ($row = mysqli_fetch_object($customer)){
        

        $fname=$row ->firstname;
        $lname=$row ->lastname;

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
                    <h3 class="text-primary, color: red;">U-Guy Page</i></h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        
                        <span><?php echo $fname; echo " ";echo $lname;?></span>
                    </div>
                </div>
               
                        <a href="uguy.php" class="nav-link active" > <i class="fa fa-bell me-lg-2 "></i>Customer's Order</a>
                        <a href="accepted_order.php" class="nav-link active" ><i class="fa fa-bell me-lg-2 "></i>Accepted Order </a>
                        <a href="Successfully_delivered.php" class="nav-link"  style="color: red;"><i class="fa fa-bell me-lg-2 "></i>Successfully Delivered </a>
                    
                    
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


            




<table class="table">
  <thead>
    <tr>

      <th scope="col">Customer's Name</th>
      <th scope="col">Room Location</th>
      <th scope="col">Action</th>
    </tr>
  </thead>


<?php

$orders_form=mysqli_query($conn,"SELECT * FROM orders WHERE status='Accepted' AND uguy_firstname='$fname' AND uguy_lastname='$lname' AND delivered='Delivered'");
while($row_orders=mysqli_fetch_array($orders_form)){

 ?>


  <tbody>
  
      <td><?php echo$row_orders['customer_firstname']; echo " "; echo $row_orders['customer_lastname'];?></td>
      <td><?php echo $row_orders['room']?></td>
      <td><button><a href="view_accepted_order.php?id=<?php echo $row_orders['id'];?>">View Successfully Order</button></td>
    </tr>
    
  </tbody>
<?php } ?>
</table>



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