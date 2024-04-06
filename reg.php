<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>

    <style>
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
           
        }

        body {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background: url('img/b.webp');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            border-radius: 5px;
            border:1.5px solid;
            width: 430px;
            height: 520px;
            margin-left:470px;
            margin-top:50px;
            box-shadow: center;
            border-color:purple;
            border:1px solid;
            box-shadow: 0px 10px 20px purple;
            opacity: 0.8;
            font-size: 21px;
    
    }
        
       </style>

</head>
<body>
    
   
 
    <form action="process.php" method="POST">
    <h1>Registration Form</h1>


        <label>Name: </label> </br>
        <input type="text" name="nm" required></p>

        <label>Email: </label> </br>
        <input type="email" name="email" required></p>

        <label>Password: </label> </br>
        <input type="password" name="pass" required></p>

        <label>Phone Number: </label> </br>
        <input type="text" name="pn" required></p>

        <input type="submit" name="reg_button" value="Register">

        <p> <a href="index.php"> Click Here To Login! </a></p>
    </form>

   

</body>
    
</html>