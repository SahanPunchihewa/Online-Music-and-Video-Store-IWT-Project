<?php
   
   include 'database.php';
 
  if(isset($_POST["submit"])){
       
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contact (name,email,phone,subject,message) VALUES ('$name','$email','$phone','$subject','$message');";

    if(mysqli_query($conn,$sql)) {
      header('location:../php/ContactUs.php');
    }else{
      echo "faild";
    }

  }


?>