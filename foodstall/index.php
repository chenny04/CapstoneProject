<?php
    include "../conn.php";
    session_start();

    $email=$_SESSION['email'];

    $customer=mysqli_query($conn,"SELECT * FROM foodstall WHERE email='$email'");
        while ($row = mysqli_fetch_object($customer)){

        $foodstallname=$row->foodstallname;
        $foodstallid=$row->id;

        $logo=$row->logo;

    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $foodstallname; ?></title>
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

.btn-sm {
    padding: 0.1rem 0.3rem;
    font-size: 1rem;
    line-height: 3rem;
    width: 4rem;

}

.modal-header{
    position: center;
    position: relative;
}

.red-font {
    color: red;
}



</style>


<body>

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="customerdashboard.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary, color: red;">Food Stall's Page</i></h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                    <img class="rounded-circle me-lg-2" src="../foodstall_logo/<?php echo $logo;?>" alt="" style="width: 90px; height: 90px;">
                        <h1><?php echo $foodstallname; ?></h1>
                        
                    </div>
                </div>
            
                <a href="order_history.php" class="nav-link red-font"><i class="fa fa-bell me-lg-2"></i>Order History</a>

                        
                      
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
                            <img class="rounded-circle me-lg-2" src="../foodstall_logo/<?php echo $logo;?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Account</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="../logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

<div class="container">
<div class="text-end me-2">
    <button id="addDepartmentBtn" style="text-decoration: none; color: white;" class="btn btn-danger btn-flat" data-bs-toggle="modal" data-bs-target="#addDepartmentModal" >
        <i class="fas fa-plus"></i>Add Foods Product Here...
    </button>
</div><br>

<div class="modal fade" id="addDepartmentModal" tabindex="-1" aria-labelledby="addDepartmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            
            <div class="modal-header">
                <h5 class="modal-title" id="addDepartmentModalLabel">Products</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <form action="food_stall_process.php?name=<?php echo$foodstallname;?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="" class="form-label">Upload Product</label>
                        <input type="file" name="picture" required placeholder="" required accept="gif, jpeg, png, jpg, webp, jfif">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Product Name: </label>
                        <input type="text" class="form-control" name="pn" id="userNameInput">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Price:</label>
                        <input type="text" class="form-control" name="price" id="passwordInput">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" id="submitDepartmentBtn" name="Uploadproduct" class="btn btn-primary">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>


<div id="foodstall_list"  class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">



<?php 
$product_list_all = mysqli_query($conn, "SELECT * FROM food_products WHERE foodstall_name='$foodstallname' ORDER BY id DESC");
while($row_product = mysqli_fetch_array($product_list_all)) {
?>


<div class="2">
    <img src="food_product/<?php echo $row_product['product_picture']; ?>" width="100%" height="100%">
    <span><?php echo $row_product['product_name']; ?></span><br>
    <span>Price: Php <?php echo $row_product['price']; ?></span>
</div>

        
<button class="btn btn-warning class btn-sm">
    <a href="update_product.php?id=<?php echo $row_product['id']; ?>" style="text-decoration: none; color: white;">Update</a>
</button>
        <button class="btn btn-danger btn-sm" onclick="confirmDelete(<?php echo $row_product['id']; ?>)">Delete</button>


<script>
    function confirmDelete(productId) {
        if (confirm("Are you sure you want to delete this product?")) {
            // AJAX request to delete product
            $.ajax({
                url: 'food_stall_process.php',
                type: 'POST',
                data: { product_id: productId, action: 'delete_product' },
                success: function(response) {
                    // Reload the page or update UI as needed
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    // Handle error
                }
            });
        }
    }
</script>


<?php } ?>


          
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