<?php
    include "../conn.php";
    session_start();

    $email = $_SESSION['email'];

    $getadminname = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' ");

    while($row=mysqli_fetch_object($getadminname)){
     $admin_name = $row -> admin_name;
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $admin_name; ?></title>

    <style>

.main{
 font-size:30px;
}

 .main a:hover{
 background-color: purple;
 color:red;
}

 .main a.active{
 background-color:purple;
 color:red;
}

 .custom-button{
 background-color: black;
 border: 1px solid purple;
 color: pink;
 padding: 19px 23px;
 text-align:center;
 text-decoration: none;
 display: incline-block;}
 a:link{
 color:purple;
}

body {
     height: 300vh;
     text-align:center;
     background: url('img/ww.jpg');
     background-size: cover;
     height: 500px;
     color:black;
     font-size: 35px; 
 }


</style>
    
</head>
<body>

      <hr> </hr>

    <div class="main">
      <a class ="custom-button" href="adminhome.php">  HOME </a>
      <a class ="custom-button" href="user_post.php">  USER'S POST </a>
      <a class ="custom-button" href="index.php">  LOGOUT </a>
    </div>

    <h1>Welcome Admin <?php echo $admin_name; ?> </h1>
    
</body>
</html>