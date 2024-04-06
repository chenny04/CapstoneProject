<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Page</title>

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

        .content{
        text-align: top;
    }
           
        .header{
        padding:30px;
        background-color: pink;
        text-align: center;
    }

        *{
        box-sizing: border-box;
    }

        body{
        margin: 0;
    }

        .row{
        padding: 50px;
    }
        .col1{
        width:25%;
        padding: 10px 10px 20px 10px;
        border: 2px solid black;
        background-color: pink;
        box-shadow: 10px 10px 5px purple;
        float: left;
        -ms-transform: rotate(7deg);
        -webkit-transform: rotate(7deg);
        transform: rotate(7deg);
    }

        .col1 span{
        font-weight: bold;
        font-size: 25px;
    }

        .col1:hover{
        transform: rotate(0deg);
    }

        .col2{
        width: 25%;
        padding: 10px 10px 20px 10px;
        border: 2px solid black;
        background-color: pink;
        box-shadow: 10px 10px 5px purple;
        float: left;
        -ms-transform: rotate(-8deg);
        -webkit-transform: rotate(-8deg);
        transform: rotate(-8deg);
    }

        .col2 span{
        font-weight: bold;
        font-size: 25px;
    }

        .col2:hover{
        transform:rotate(0deg);
    }

        .row:after{
        content:" ";
        display:table;
        clear:both;
    }

        @media screen and (max-width:600px){

        .col1{
        width:100%;
        }

        .col2{
        width:100%;
        }

    }

    </style>

</head>

<body>
  
    <div class="main">
      <a class=" custom-button" href="userhome.php"> HOME </a> 
      <a class=" custom-button" href="gallery.php">GALLERY </a> 
      <a class=" custom-button" href=""> GROUP PROJECT </a> 
      <a class=" custom-button" href="createpost.php"> CREATE POST </a> 
      <a class=" custom-button" href="update_profile.php"> UPDATE PROFILE </a> 
      <a class=" custom-button" href="index.php"> LOGOUT </a>
    </div>

    <div class="header"><h1> SAKURA </h1>
    </div>

    <div class="row">
        <div class="col1">
            <img src="img/somei.jpg" width="100%">
            <span> Somei Yoshino</span>
            <p class="desc1">Somei Yoshino is probably the most famous type of Sakura tree in Japan. They 
                account for approximately 80% of the Sakura trees in Japan, and can be easily found across the 
                country. When meteorologists make cherry blossom forecasts, they are referring to the Somei 
                Yoshino variety. They were originally developed as a hybrid variety between “Edo-zakura” and 
                “Oshima-zakura” back in the Edo period. </p>
        </div>

        <div class="col2">
            <img src="img/yama.jpg" width="100%">
            <span>Yamazakura</span>
            <p class="desc2">Yamazakura is another famous sakura tree that is native to Japan. They typically 
            grow wild in mountainous areas in Honshu , Shikoku and Kyushu region. The light pink and white 
            flowers have five small petals, which is similar toSomei Yoshino. Flowers and brown colored leaves 
            start to appear at the same time from late March, which offers a beautiful contrast of the different 
            colors! As the climate gets warmer,the brown leaves change the color to lush green.


</p>
        </div>
    
 <!-- -->
        <div class="col1">
           <img src="img/yaez.jpg" width="100%">
           <span>Yaezakura</span>
           <p class="desc1">Yaezakura (also known as double-flowered cherry blossoms) have recognizable traits 
            which are unique and can’t be found in other types of Sakura trees. The flowers consist of more 
            than 6 petals. They bloom 1-2 weeks later than Somei Yoshino, and can be enjoyed for a longer period 
            of time. The color variation of the flowers includes white,light pink and vivid pink. Unlike Somei
            Yoshino,leaves appear at the same time when the flowers open.
        </div>
    
        <div class="col2">
        <img src="img/shi.jpg" width="100%">
        <span>Shidare Zakura</span>
        <p class="desc4">Shidare Zakura is widely known as “weeping cherry trees” in English. They have soft, 
            tender branches drooping down towards the ground. The attractive appearance has fascinated Japanese
             people for over centuries.The blossoms boast a range of color varieties such as white, light pink 
             and vivid pink. The tiny, adorable flowers on the characteristic drooping branches of the Shidare 
             Zakura are the official flower of Kyoto Prefecture.
    </div>

   <!-- -->
    </div>

    <!-- -->
</div>
    
</body>
</html