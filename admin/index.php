<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <style>

      body{
        height: 100vh;
        text-align:center;
        background: url('img/nj.jpg');
        background-size: cover;
        height: 380px;
        color: purple; 
        }
           
        .d{
        display: flex;
        height: 90vh;
        justify-content: center;
        align-items: center;
        padding:10px;
        background: url('img/bl.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
        border-radius: 5px;
        border:1.5px solid;
        width: 390px;
        height: 400px;
        margin-left:470px;
        margin-top: 95px;
        box-shadow: center;
        border-color:purple;
        color:black;
        border:1px solid;
        box-shadow: 0px 10px 20px 10px purple;
        opacity: 0.8;
    }


</style>

</head>
<body>

    <div class="d">
     <center>
     <h1>Login Page for Admin </h1>

        <form action ="adminprocess.php" method="POST">
          <labe> Email </label> </br>
           <input type="email" name="email" required placeholder="Email here..."> </p>

           <labe> Password </label> </br>
           <input type="password" name="pass" required placeholder="Password here..."> </p>

           <input type="submit" name="admin_login" value="LOGIN">

        </form>
     </center>
    </div>
</body>
</html>