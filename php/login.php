<?php

$conn = mysqli_connect("localhost","root","","newdata");
  session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
	  $uname = $_POST["uname"];
	  $pwd = $_POST["pwd"]; 
		
      if($uname == "test" && $pwd == "1234") {
         //session_register("myusername");
        $_SESSION['logged_user'] = $uname;
         
        echo "<script> alert('Welcome to !!!!')</script>";
        
      }else {
         echo "<script> alert('You have entered a wrong username or password!!!!')</script>";
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title> <!--Page title -->
    <link rel = "stylesheet" href = "../css/login.css"> <!--Link to External CSS file-->
    <script src = "../js/login.js"></script> <!--Link External JavaScript file-->
   
</head>
<body>
    
    <body background= "../image/backg.jpg" class = "background">
       
        <div class = "logo"><a href="../html/index.html"><img src ="../image/logo.jpg" onclick="myNewFunction()"></a></li></div> <!--Logo connect to home to page-->

        <div class= "nav1">    <!--Navigation bar starting point-->
            <nav>
                <ul> 
                    <li class = "home"><a href="../php/main.php" onclick="myNewFunction()">Home</a></li> <!--Home page in Navigation bar-->
                    <li class = "music"><a href="../php/music page.php"onclick="myNewFunction()" >Music</a></li> <!--music page in Navigation bar-->
                    <li class = "video"><a href = "../php/video page.php"onclick="myNewFunction()">Video</a></li> <!--Video page in Navigation bar-->
                    <li class = "about"><a href = "../php/About.php">About </a></li> <!--About page in Navigation bar-->
                <div class = "buttons">    
                    
                </div>                
             </ul>
            </nav>
        </div>  <!--Navigation bar ending  point-->
   
<div class = "loginbox"> 
    <h1><b>LOGIN FORM</b></h1>
<br>
    <a href = "#" > <img src = "../image\fb.png"  class = "fblogo"  onclick="myfacebookFunction()"> </a> <!--Connected login with facebook account-->
    <a href = "#"> <img src = "../image\google.png" class = "googlelogo" onclick="myGoogleFunction()"> </a> <!--Connected login with google account-->

<h1 class = "or"><b>---OR---</b></h1>

    <form class = "box" action = "login.php" method="POST">
        <h3 class = "textname"><b>EMAIL ADDRESS</b></h3>
        <input type = "email" name = "email" placeholder="ENTER EMAIL ADDRESS" class = "login" >
        <br>
        <br>
        <h3 class = "textname"><b>PASSWORD</b></h3>
        <input type = "password" name = "" placeholder = "ENTER PASSWORD" class = "login" >
        <input type = "checkbox" class = "checkbox"><b>Remember me</b>
        <a href="../php/resetpassword.php"><b class = "password">Forgot password?</b></a>

        <a href="../php/My Profile.php"><input type="submit" name="submit" value="Login" class = "log"  onclick="validate()"><a>
         <p class = "reg">Not a Member? <a href="../php/register.php" class = "reg1" >Register Now!</a></p>
      
        </form>
        </div>

        <footer class="footer">
                        

            <div class = "nav2">   
               <div class= "cards" >
                
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