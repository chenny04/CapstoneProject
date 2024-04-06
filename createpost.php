<?php
    include "conn.php";
    session_start();

    $e=$_SESSION['email'];

    $getname=mysqli_query($conn, "SELECT * FROM users WHERE email='$e' ");
    while($row=mysqli_fetch_object($getname)){

        $name= $row -> name;
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name;?></title>
   
    <style>

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

       body {
            height: 100vh;
            text-align:center;
            background: url('img/f.jpg');
            background-size: cover;
            height: 380px;
            color: purple; 
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
        background: url('img/sp.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
        border-radius: 5px;
        border:1.5px solid;
        width: 500px;
        height: 500px;
        margin-left:440px;
        margin-top: 60px;
        box-shadow: center;
        border-color:purple;
        color: black;
        border:1px solid;
        box-shadow: 0px 10px 20px 10px purple;
        opacity: 0.8;
        font-size: 20px;
    }

</style>

</head>
<body>
    
    <div class="main">
      <a class ="custom-button" href="userhome.php"> HOME </a>
      <a class="custom-button" href="gallery.php">GALLERY </a>
      <a class="custom-button" href=""> GROUP PROJECT </a>
      <a class="custom-button" href="createpost.php"> CREATE POST </a>
      <a class="custom-button" href="update_profile.php"> UPDATE PROFILE </a>
      <a class="custom-button" href="index.php"> LOGOUT </a>
    </div>

    <div class="d">
    <form action="process.php" method="POST">

    <h1> Create Post</h1>

    <label>Title of your Post</label> </br>
    <input type="text" name="title" required placeholder="Add Title here..."> </p>

    <label>Select Date</label> </br>
    <input type="date" name="mydate" required> </p>

    <label>Add Description</label> </br>
    <textarea cols="50" rows="10" name="desc"> </textarea> </p>

    <input type="hidden" name="posted_by" value="<?php echo $name; ?>">

    <input type="submit" name="create_post" value="POST">

   </div>

</form>




</body>
</html>