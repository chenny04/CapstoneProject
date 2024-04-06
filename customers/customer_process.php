<?php 

include "../conn.php";

$get_name=$_GET['food'];

$product_list_all=mysqli_query($conn,"SELECT * FROM food_products  WHERE  id='$get_name'");
        

        while ($row = mysqli_fetch_object($product_list_all)){
        

        $product_name=$row ->product_name;
        $price=$row->price;
        $foodstall=$row->foodstall_name;

    }

if(isset($_POST['BUY'])){

$cname=$_POST['cn'];
$lname=$_POST['lname'];
$cnumber=$_POST['cnumber'];
$room=$_POST['room'];

$insert=mysqli_query($conn, "INSERT INTO Orders (id,foodstall,productname,price,customer_firstname,customer_lastname,phone,room,status,delivered) VALUES('0','$foodstall','$product_name','$price','$cname','$lname','$cnumber','$room','Pending','Pending')");



         if($insert==true){
               
                ?>
                <script> 
                    alert("Order Successfully added!");
                    location.href="view_foodstall_product.php?id=<?php echo $foodstall?>";
                </script>
                <?php
            }else{

            	 ?>
                <script> 
                    alert("order");
                     location.href="view_foodstall_product.php?id=<?php echo $foodstall?>"
                    
                </script>
                <?php

            }

}

?>