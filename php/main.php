<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title> <!--Page title -->
    <link rel = "stylesheet" href="../css/home.css"> <!--Link to External CSS file-->
    <script src = "../js/home.js"></script> <!--Link External Java Script file-->
</head>
<body>

    <body background="../image/concert-4768496_1920.jpg" class = "background"> <!--Background wallpaper in home page -->
        
    <div class = "logo"><a href="../php/main.php"><img src ="../image/logo.jpg"></a></li></div> <!--Logo connect to home to page-->

    <div class= "nav1">    <!--Navigation bar starting point-->
        <nav>
            <ul> 
                <li class = "home"><a href="../php/main.php" onclick="myFunction()">Home</a></li> <!--Home page in Navigation bar-->
                <li class = "music"><a href="../php/music page.php"onclick="myFunction()" >Music</a></li> <!--music page in Navigation bar-->
                <li class = "video"><a href = "../php/video page.php"onclick="myFunction()">Video</a></li> <!--Video page in Navigation bar-->
                <li class = "about"><a href = "../php/About.php">About </a></li> <!--About page in Navigation bar-->
            <div class = "buttons">    
                <button class = "signin"><a href="../php/login.php">Sign In</a></button>  <!--Signin Button-->
                <button class = "register"><a href="../php/register.php">Register</a></button>   <!--Register Button-->
            </div>                
         </ul>
        </nav>
    </div>  <!--Navigation bar ending  point-->


        <h1 class = "firstline">Feel Millions</h1>
        <h1 class = "secondline">of</h1>
        <h1 class = "thirdline">Musics & Videos</h1>
       <input type ="search" name = "music" name = "video" placeholder="Type to Search" class = "search"> <!--Search Bar--> 
      
    
    <footer class="footer"> <!--Footer -->
                        

        <div class = "nav2">   
           <div class= "cards" >

                <!--Footer Images-->
                <img src= "../image/visa.jpg" class = "visa"> 
                <img src = "../image/mastercard.jpg" class = "mastercard">
                <img src = "../image/amercian.jpg" class = "amercian">
                <img src = "../image/googlestore.jpg" class = "googlestore">
                <img src = "../image/appstore.png" class = "applestore">
                <img src = "../image/facebook.png" class = "facebook">
                <img src = "../image/twitter.png" class = "twitter">
                <img src = "../image/instagram.png" class = "instagram">
                <h3 class = "copy">Copyright@2021 by Zikmusic.com</h3>
            </div>
        </div>
    </footer>             

</body>
</html>


