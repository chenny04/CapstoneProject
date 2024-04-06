<?php 

include "../conn.php";


 if(isset($_POST['Uploadproduct'])){

        $picture=$_FILES['picture']['name'];
        $fileTmpName=$_FILES['picture']['tmp_name'];
        $productname=$_POST['pn'];
         $price=$_POST['price'];

         $foodstallname=$_GET['name'];
         

         $insert=mysqli_query($conn,"INSERT INTO food_products (id,foodstall_name,product_picture,product_name,price)
         	VALUES('0','$foodstallname','$picture','$productname','$price')");

         if($insert==true){
                $fileDestination='food_product/'.$picture;
                move_uploaded_file($fileTmpName, $fileDestination);

                ?>
                <script> 
                    alert("You Added a Product!");
                    window.location.href="index.php?name=<?php echo  $foodstallname; ?>";
                </script>
                <?php
            }else{

            	 ?>
                <script> 
                    alert("Product Not added!");
                    window.location.href="index.php?name=<?php echo  $foodstallname; ?>";
                </script>
                <?php

            }
}


    // Update product
    if(isset($_POST['update_product'])) {
        $productId = $_POST['product_id'];
        $updatedProductName = $_POST['updated_product_name'];
        $updatedPrice = $_POST['updated_price'];

        $updateQuery = "UPDATE food_products SET product_name='$updatedProductName', price='$updatedPrice' WHERE id='$productId'";
        $result = mysqli_query($conn, $updateQuery);

        if($result) {
            header("Location: your_page.php"); 
            exit();
        } else {
            echo "Update failed: " . mysqli_error($conn);
        }
    }

    // Delete product
    if(isset($_POST['action']) && $_POST['action'] == 'delete_product') {
        $productId = $_POST['product_id'];

        
        $deleteQuery = "DELETE FROM food_products WHERE id='$productId'";
        $result = mysqli_query($conn, $deleteQuery);

        if($result) {
            echo "Product deleted successfully.";
            exit();
        } else {
            echo "Delete failed: " . mysqli_error($conn);
        }
    }

    ?>
