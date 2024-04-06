<?php
include "../conn.php";

// Fetch product details
$product_id = $_GET['id']; // Assuming you're passing product ID in the URL
$select_query = "SELECT * FROM food_products WHERE id='$product_id'";
$result = mysqli_query($conn, $select_query);
$row_product = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['updated_product_name'];
    $product_price = $_POST['updated_price'];

    $update_query = "UPDATE food_products SET product_name='$product_name', price='$product_price' WHERE id='$product_id'";
    
    if (mysqli_query($conn, $update_query)) {
        echo "Product Updated Successfully";
    } else {
        echo "Error Updating Product: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Update Product</title>
    <style>
        body{
        }
    </style>
</head>
<body>

    <div class="container" style="padding-top:50px; padding:">
    <div class="card shadow p-3">
        <center>
        <h1 style="padding-top:50px; color: red;">Update Product</h1>
    <form action="food_stall_process.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="product_id" value="<?php echo $row_product['id']; ?>">
        <div class="mb-3">
            <label for="updated_product_name" class="form-label">Product Name:</label>
            <input type="text" class="form-control" style="width: 30%" id="updated_product_name" name="updated_product_name" value="<?php echo htmlspecialchars($row_product['product_name']); ?>">
        </div>
        <div class="mb-3">
            <label for="updated_price" class="form-label">Price: Php</label>
            <input type="text" class="form-control" style="width: 30%"  id="updated_price" name="updated_price" value="<?php echo htmlspecialchars($row_product['price']); ?>">
        </div>
        <div class="modal-footer">
            <br>    
            <button type="button" class="btn btn-danger" onclick="window.history.back();">Cancel</button>
            <button type="submit" name="update_product" class="btn btn-warning text-dark" >Save Changes</button>
        </div>
    </form>
    </div>
    </center>
</body>
</html>
