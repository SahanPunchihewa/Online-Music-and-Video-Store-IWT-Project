<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactUs</title>
    <link rel="stylesheet" href="../css/ContactUs.css"> 
</head>
<body style="background-image : url(../image/Condp.jpg)">
<?php include('../php/navigation.php');?>
<br><br><br><br><br><br><br>
    <div class="header">
        <h1>CONTACT US</h1>
    </div>
    <br>
    <br>
    <center><table border ="0" width="100%">
        <tr>
            <td><center>
<div class="div1">
    
     <br>  <br> <br> 
    <a href ="https://www.google.com/"> <img src="../image/phone.jpg" width="40px" height="40px"></a> <img src="../image/white.jpg" width="10px" height="30px">  <a href="#" class="btn">011-3426432 / 071-1102200</a><br><br>
    <a href ="https://www.gmail.com/"><img src="../image/gmail.png" width="35px" height="35px"></a>  <img src="../image/white.jpg" width="10px" height="30px"> <a href="#" class="btn">Zik@info.lk</a><br><br>
    <a href ="https://www.google.com/"><img src="../image/domain.png" width="40px" height="40px"></a>  <img src="../image/white.jpg" width="10px" height="30px"> <a href="#" class="btn">www.ZikMusic.com</a><br><br>
        <a href ="https://www.google.com/"class="btn"><img src="../image/fb like.png" width="100px" height="30px"></a> <a href ="https://www.google.com/"class="btn"><img src="../image/login fb.png" width="200px" height="30px"></a>
        <br><br>
        <a href ="https://www.google.com/"class="btn"><img src="../image/twitter-logo.jpg" width="100px" height="30px"></a> <a href ="https://www.google.com/"class="btn"><img src="../image/tw.png" width="200px" height="30px"></a>
    <br><br><br><br>
    <a href ="https://www.facebook.com/"><img src="../image/facebook logo.png" width="30px" height="30px"></a><img src="../image/white.jpg" width="50px" height="30px">
    <a href ="https://www.google.com/"><img src="../image/tw logo.jpg" width="30px" height="30px"></a><img src="../image/white.jpg" width="50px" height="30px">
    <a href ="https://www.instagram.com/"><img src="../image/instagram.jpg" width="30px" height="30px"></a><img src="../image/white.jpg" width="50px" height="30px">
    <a href ="https://www.google.com/"><img src="../image/My_QR_Code.png" width="50px" height="50px"></a>
</div></center>
            </td>
            <td>
              <div class="div2">
                   <img src="../image/logogz.jpg" class="img">
                </div>  
            </td>
        </tr>
            
        <tr>
            <td colspan="2">
               <div class="div3">
            
        <div class="main-content">
            <div class="contact-w3">

                <form action="sendform.php" method="post">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Your name" required>
                    <div class="row">
                        <div class="contact-left-w3">
                            <label>Email</label>
                                <input type="text" name="email" placeholder="Email address" required>
                        </div>
                        <div class="contact-right-w3l">
                            <label>Phone</label>
                            <input type="text" name="phone" placeholder="Phone number" required>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <label>Subject</label>
                        <input type="text" name="subject" placeholder="Subject" required>
                    <div class="row1">
                        <label>Message</label>
                        <textarea placeholder="Message" name="message"></textarea>
                    </div>
                    <input type="submit" name="submit" value="Send message">
                </form></div></div></div></div></td></tr></table>
                <div>
                
                </div>
</body>
</html>
