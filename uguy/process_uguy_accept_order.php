<?php

include "../conn.php";


$get_id=$_GET['id'];


if(isset($_POST['accept_order'])){

    $uguy_fname=$_POST['dfn'];
      $uguy_lname=$_POST['dln'];
      $status="Accepted";
      $notdel='Pending';
    


$insert_uguy=mysqli_query($conn,"UPDATE  orders SET uguy_firstname='$uguy_fname', uguy_lastname='$uguy_lname', status='$status', delivered ='$notdel' WHERE id='$get_id'");


  if($insert_uguy==true){
                 
                ?>
                <script> 
                    alert("Order Successfully added!");
                    location.href="uguy.php";
                </script>
                <?php
            }else{
                  ?>
                <script> 
                    alert("Order Not added!");
                    location.href="uguy.php";
                </script>
                <?php
            }





}
?>