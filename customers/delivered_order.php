<?php
		include "../conn.php";


		$get_id=$_GET['id'];
		$del="Delivered";
		$delivered=mysqli_query($conn, "UPDATE orders SET delivered='$del' WHERE id='$get_id'");

		if ($delivered==TRUE) {
			   ?>
                <script> 
                    alert("Order Successfully Delivered");
                    location.href="order_status.php";
                </script>
                <?php
		}else{
			   ?>
                <script> 
                    alert("Order Not Delivered");
                    location.href="order_status.php";
                </script>
                <?php
		}



 ?>