<?php
   
   include 'database.php';
 
  if(isset($_POST["buynow"])){
       
    $name = $_POST["name"];
    $no = $_POST["no"];
    $month = $_POST["month"];
    $year= $_POST["year"];
    $cvv = $_POST["cvv"];

    $sql = "INSERT INTO paymeny (Name,Cno,Cmonth,Cyear,cvv) VALUES ('$name','$no','$month','$year','$cvv');";

    if(mysqli_query($conn,$sql)) {
      header('location:../php/ContactUs.php');
    }else{
      echo "faild";
    }

  }


?>