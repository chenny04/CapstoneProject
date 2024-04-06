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

body {
     height: 100vh;
     text-align:center;
     background: url('img/ch.jpg');
     background-size: cover;
     height: 380px;
     color: purple; 
 }

.main{
 font-size:29.5px;
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

 .content{
 text-align: top;
}
    
 .d{
 display: flex;
 height: 70vh;
 justify-content: center;
 align-items: center;
 padding:10px;
 background: url('img/ry.jpg');
 background-position: center;
 background-repeat: no-repeat;
 background-size: cover;
 text-align: center;
 border-radius: 5px;
 border:1.5px solid;
 width: 650px;
 height: 500px;
 margin-left:325px;
 margin-top: 60px;
 box-shadow: center;
 border-color:purple;
 color: black;
 border:1px solid;
 box-shadow: 0px 10px 20px 10px purple;
 opacity: 0.8;
}

</style>


</head>
<body>

    <div class="main">
    <a class ="custom-button" href="adminhome.php">  HOME </a>
    <a class ="custom-button" href="user_post.php">  USER'S POST </a>
    <a class ="custom-button" href="index.php">  LOGOUT </a>
    </div>


    <div class="d">
        <center>

    <h1> Welcome Admin Meshyla Mae Tronsal </h1>

    <h1> ALL Post by the Users </h1>
    <hr> </hr>

    <?php
    $getuserspost=mysqli_query($conn, "SELECT * FROM post");
    while($row1=mysqli_fetch_array($getuserspost)){
        ?>

        <h2>Title: <?php echo $row1['title'];?> </h2>
        <h2>Date: <?php echo $row1['mydate'];?> </h2>
        <h2>Description: <?php echo $row1['description'];?> </h2>
        <h2>Posted By: <?php echo $row1['posted_by'];?> </h2>

        <hr> </hr>


        <?php
    }
         ?>

</center>
</body>
</html>