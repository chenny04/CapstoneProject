<?php 
    include "../conn.php";
    session_start();

    $email=$_SESSION['email'];

    $admin=mysqli_query($conn,"SELECT * FROM admin WHERE email='$email'");
        while ($row = mysqli_fetch_object($admin)){
        

      $name=$row->Name;

    }

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/stalldashboard.css" rel="stylesheet">
    <title><?php echo $name;?></title>
</head>
<body>
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
<center> <img class="mr-4" src="assets/img/logo.jpg" alt="" width="55" height="55" style="border-radius: 50%;"></h3></center>
                         <center> <h3>U-Delivery</center>  </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="admin.php">Dashboard</a>
                </li>
                <li>
                    <a href="foodstall.php">Food Stalls</a>
                </li>
                <li style="color: black;">
                    <a href="order.php">Orders</a>
                </li>
                <li>
                    <a href="customer.php">Customers</a>
                </li>
                <li>
                    <a href="uguys.php">U-guy</a>
                </li>
                <li>
                    <a href="../logout.php">Logout</a>
                </li>
                
        </nav>

 </ul>
       
<div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-muted">

                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <h1 class="container-fluid"><?php echo $name;?></h1>
                </div>
            </nav>


<table class="table">
  <thead>
    <tr>

      <th scope="col">Food Stalls</th>
      <th scope="col">Products</th>
      <th scope="col">Price</th>
      <th scope="col">Sold</th>
    </tr>
  </thead>


<?php
                        


                    $food_list=mysqli_query($conn,"SELECT * FROM food_products  ORDER BY foodstall_name ASC");
                    while($rows_food_list=mysqli_fetch_array($food_list)){

                        $foodstall_a=$rows_food_list['product_name'];

                        $sold =mysqli_query($conn, "SELECT COUNT(productname) AS value_total FROM orders WHERE productname='$foodstall_a' AND delivered='Delivered' ");
                        $sold_row=mysqli_fetch_assoc($sold);
                        $sold_out = $sold_row['value_total'];

 ?>


  <tbody>
                        <th><?php echo $rows_food_list['foodstall_name']?></th>
                        <th><?php echo $rows_food_list['product_name']?></th>
                        <th><?php echo $rows_food_list['price']?></th>
                        <th><?php echo $sold_out;?></th>
                        
    </tr>
    
  </tbody>
<?php } ?>
</table>


    </div>
</div>         
</div>

</body>
</html>



<script>
$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>