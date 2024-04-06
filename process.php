<?php
    include "conn.php";
    session_start(); 

    //this is for Registration for Customer

    if(isset($_POST['reg'])){

        $ln=$_POST['ln'];
        $fn=$_POST['fn'];
        $studnumber=$_POST['studnumber'];
        $cn=$_POST['cn'];
        $department=$_POST['department'];
        $phinmaemail=$_POST['phinmaemail'];
        $pass=$_POST['pass'];
        $status="Customer";

        //validate
        $validate = mysqli_query($conn, "SELECT * FROM customers WHERE email = '$phinmaemail' ");

        $val_num = mysqli_num_rows($validate);

        if($val_num <= 0){

            $insert = mysqli_query($conn, "INSERT INTO customers VALUES
            ('0', '$ln', '$fn', '$studnumber', '$cn', '$department', '$phinmaemail', '$pass' ,'$status' )");

            if($insert==true){
                ?>
                <script> 
                    alert("You Are Successfully Registered!");
                    window.location.href="index.php";
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert("Error in Registration! \n Please Try Again!");
                    window.location.href="index.php";
                </script>
                <?php
            }
        }else{
            ?>
                <script>
                    alert("PHINMA Is In Use!");
                    window.location.href="index.php";
                </script>
                <?php
            }
        }
    
//this program is for Login Customer

if(isset($_POST['login'])){

    $phinmaemail = $_POST['phinmaemail'];
    $pass = $_POST['pass'];

    $check_login = mysqli_query($conn, "SELECT * FROM customers WHERE email = '$phinmaemail' AND password= '$pass' ");

    $n = mysqli_num_rows($check_login);

    if($n >=1){
        $_SESSION['email']=$phinmaemail;
        ?>
        <script>
        alert("Login Successfully!");
        window.location.href = "customers/index.php";
        </script>
        <?php
    }else{
        ?>
        <script>
        alert("Wrong PHINMA Email or Password!");
        window.location.href = "index.php";
        </script>
        <?php
    }
}

    


    //this is for the Food Stall Process Register

    if(isset($_POST['food_stall_reg'])){

        $picture=$_FILES['picture']['name'];
        $fileTmpName=$_FILES['picture']['tmp_name'];
        
        $fsn=$_POST['fsn'];
        $cn=$_POST['cn'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];

        //validate
        $validate = mysqli_query($conn, "SELECT * FROM foodstall WHERE email = '$email' ");

        $val_num = mysqli_num_rows($validate);

        if($val_num <= 0){

            $insert = mysqli_query($conn, "INSERT INTO foodstall VALUES
            ('0', '$picture', '$fsn', '$cn', '$email', '$pass' )");

            if($insert==true){
                $fileDestination='foodstall_logo/'.$picture;
                move_uploaded_file($fileTmpName, $fileDestination);

                ?>
                <script> 
                    alert("You Are Successfully Registered!");
                    window.location.href="index.php";
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert("Error in Registrating! \n Please Try Again!");
                    window.location.href="index.php";
                </script>
                <?php
            }
        }else{
            ?>
                <script>
                    alert("Email Is In Use!");
                    window.location.href="index.php";
                </script>
                <?php
            }
        }

    
//this program is for Food Stall Login

if(isset($_POST['login_foodstall'])){

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $check_login = mysqli_query($conn, "SELECT * FROM foodstall WHERE email = '$email' AND password = '$pass' ");

    $n = mysqli_num_rows($check_login);

    if($n >=1){
        $_SESSION['email']=$email;
        ?>
        <script>
        alert("Login Successfully!");
        window.location.href = "foodstall/index.php";
        </script>
        <?php
    }else{
        ?>
        <script>
        alert("Wrong Email or P!assword");
        window.location.href = "index.php";
        </script>
        <?php
    }
}


    //this is for Registration for Uguy

    if(isset($_POST['reg_uguy'])){

        $ln=$_POST['ln'];
        $fn=$_POST['fn'];
        $studnumber=$_POST['studnumber'];
        $cn=$_POST['cn'];
        $department=$_POST['department'];
        $phinmaemail=$_POST['phinmaemail'];
        $pass=$_POST['pass'];
        $status="Uguy";

        //validate
        $validate = mysqli_query($conn, "SELECT * FROM uguy WHERE email = '$phinmaemail' ");

        $val_num = mysqli_num_rows($validate);

        if($val_num <= 0){

            $insert = mysqli_query($conn, "INSERT INTO uguy VALUES
            ('0', '$ln', '$fn', '$studnumber', '$cn', '$department', '$phinmaemail', '$pass' ,'$status' )");

            if($insert==true){
                ?>
                <script> 
                    alert("You Are Successfully Registered!");
                    window.location.href="index.php";
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert("Error in Registrating! \n Please Try Again!");
                    window.location.href="index.php";
                </script>
                <?php
            }
        }else{
            ?>
                <script>
                    alert("PHINMA Is In Use!");
                    window.location.href="index.php";
                </script>
                <?php
            }
        }

     
//this program is for Uguy Login

if(isset($_POST['loginuguy'])){

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $check_login = mysqli_query($conn, "SELECT * FROM uguy WHERE email = '$email' AND password = '$pass' ");

    $n = mysqli_num_rows($check_login);

    if($n >=1){
        $_SESSION['email']=$email;
        ?>
        <script>
        alert("Login Successfully");
        window.location.href = "uguy/uguy.php";
        </script>
        <?php
    }else{
        ?>
        <script>
        alert("Wrong  word");
        window.location.href = "uguy/uguy.php";
        </script>
        <?php
    }
}


//this program is for Login Admin

if(isset($_POST['admin_login'])){

    $phinmaemail = $_POST['email'];
    $pass = $_POST['pass'];

    $check_login = mysqli_query($conn, "SELECT * FROM admin WHERE email='$phinmaemail' AND password ='$pass' ");

    $n = mysqli_num_rows($check_login);

    if($n >=1){
        $_SESSION['email']=$phinmaemail;
        ?>
        <script>
        alert("Login Admin Account Successfully!");
        window.location.href = "admin/admin.php";
        </script>
        <?php
    }else{
        ?>
        <script>
        alert("Wrong Admin Email or Password!");
        window.location.href = "index.php";
        </script>
        <?php
    }
}


    ?>