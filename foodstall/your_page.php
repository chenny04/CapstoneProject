<?php
include "../conn.php";

// Fetch product details
$product_id = $_GET['id']; // Assuming you're passing product ID in the URL
$select_query = "SELECT * FROM food_products WHERE id='$product_id'";
$result = mysqli_query($conn, $select_query);
$row_product = mysqli_fetch_assoc($result);

$message = ""; // Variable to store success or error message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['updated_product_name'];
    $product_price = $_POST['updated_price'];

    $update_query = "UPDATE food_products SET product_name='$product_name', price='$product_price' WHERE id='$product_id'";
    
    if (mysqli_query($conn, $update_query)) {
        $message = "Product Updated Successfully";
    } else {
        $message = "Error Updating Product: " . mysqli_error($conn);
    }
}

mysqli_close($conn);

// Redirect to your_page.php after saving changes
header("Location: your_page.php?message=" . urlencode($message));
exit;
?>
