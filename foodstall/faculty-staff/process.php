<?php
    include "conn.php";
    session_start();

    
//this program is for login

if(isset($_POST['login'])){

    $phinmaemail = $_POST['phinmaemail'];
    $pass = $_POST['pass'];

    $check_login = mysqli_query($conn, "SELECT * FROM faculty WHERE phinmaemail = '$phinmaemail' AND pass = '$pass' ");

    $n = mysqli_num_rows($check_login);

    if($n <=0){
        ?>
        <script>
        alert("Wrong Email or Password");
        window.location.href = "index2.html";
        </script>
        <?php
    }else{
        $_SESSION['phinmaemail']=$phinmaemail;
        ?>
        <script>
        alert("Login Successfully");
        window.location.href = "index2.html";
        </script>
        <?php
    }
}
    