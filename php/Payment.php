
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Payment</title>
        <link rel="stylesheet" href="../css/payment.css">
        <style>
            
            </style>
        </head>
        <body style="background-image : url(../image/main.jpeg)">>
       
            <div class = "logo"><a href="home.html"><img src ="../image/logo.jpg"></a></li></div>
    
            <div class= "nav1">   
                <nav>
                    <ul>
                        <li class = "home"><a href="home.html">Home</a></li>
                        <li class = "music"><a href="#">Music</a></li>
                        <li class = "video"><a href = "#">Video</a></li>
                        <li class = "about"><a href = "#">About </a></li>
                    </ul>
                </nav>
            </div>
            <form action="Paymentdetails.php" method="post">
                <div class = "container">
                    <h1>ENTER YOUR CARD DETAILS</h1>
                    <input type ="text" placeholder="Card Holeder Name" class = "cardholder" name="name"><br>
                    <input type = "text"placeholder="Card Number" class = "cardnumber" name="no">
                     <h3>Expire Date</h3> 
                     
                     <select name = "month" class = "months" >
                         <option value="Jan">01</option>
                         <option value="Feb">02</option>
                         <option value="Mar">03</option>
                         <option value="Apr">04</option>
                         <option value="May">05</option>
                         <option value="Jun">06</option>
                         <option value="Jul">07</option>
                         <option value="Aug">08</option>
                         <option value="Sep">09</option>
                         <option value="Oct">10</option>
                         <option value="Nov">11</option>
                         <option value="Dec">12</option>
                      </select>

                    <select name = "year" class = "year" >
                        <option value = "2021">2021</option>
                        <option value = "2022">2022</option>
                        <option value = "2023">2023</option>
                        <option value = "2024">2024</option>
                        <option value = "2025">2025</option>
                    </select>

                    <input type= "text" placeholder="CVV" class = "cvv" name="cvv">
                    <br>
                    
                    <input type = "submit"  value = "BUY NOW" placeholder="BUY NOW" name="buynow" class = "buynow">
                    </div>

                    
                    <?php include('../php/footer.php');?>




                            
                               


 
            






            </body>
            </html>