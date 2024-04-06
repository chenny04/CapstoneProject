<?php
include "conn.php";

    //this program is for create profile

    if(isset($_POST['she']))

    $fn = $_POST['fn'];
    $mn = $_POST['mn'];
    $ln = $_POST['ln'];
 

    $insert_she = mysqli_query($conn, "INSERT INTO she VALUES
    ('0','$fn','$mn', '$ln')");

    if($insert_she == true){
        ?>
            <script>
                alert("Data is Successfully Inserted!");
                window.location.href="index.php";
            </script>
        <?php
    }else{
        ?>
        <script>
            alert("Data is not Inserted!");
            window.location.href="index.php";
        </script>
    <?php 

    }
?>