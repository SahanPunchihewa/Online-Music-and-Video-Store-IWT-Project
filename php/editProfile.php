<?php
   
   include 'database.php';
 
  if(isset($_POST["done"])){
      
  
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender=$_POST["gender"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $pno = $_POST["pno"];
    
    $sql = "INSERT INTO profile (fname,lname,gender,email,dob,pno) VALUES ('$fname','$lname','$gender','$email','$dob','$pno');";

    if(mysqli_query($conn,$sql)) {
      echo "saved";
    }else{
      echo "faild";
    }

  }


?>
<DOCTYPE html>
<html>
<head>
    <title>user
    </title>
    <link rel = "stylesheet" type="text/css" href = "css/Edit Profile.css">
</head>
<body>
<?php include('php/navigation.php');?>
<br><br><br><br><br><br>
    <center>
    <form action="editProfile.php" method="post" >
              <div class ="box">
                    <img src = "image/aa.jpg"></image>
                    <input type="file" name =" pic " id="file" accept = "image/*">
                    <label for = "file"> EDIT PIC</label>
                    <input type = "text" name = "fname"placeholder= "First name">
                    <input type = "text" name = "lname"placeholder= "Last name"> 
                    <input type = "text" name = "gender"placeholder= "Gender">
                    <input type = "text" name = "dob"placeholder= "Date of Birth">
                    <input type = "Email" name = "email"placeholder= "Email ID">
                    <input type = "text" name = "pno"placeholder= "Phone Number">
                    <button style = "float : left ;margin :10px 0 0 18.2%;">CANSEL</button>
                    <button style="float:right;margin:10px 18.2% 0 0;  "  name="done">DONE</button>
             </div>
</form>
     </center>    

</body>
</html>
<?php mysqli_close($conn); ?>
