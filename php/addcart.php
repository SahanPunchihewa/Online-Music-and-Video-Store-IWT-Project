<?php
   
   include 'database.php';
 

       $id = $_GET['id'];
       $table = $_GET['name'];
    
 



    if(strcmp($table,"music")){
          
        $sql = "INSERT INTO cart (music_id) VALUES ('$id');";
        if(mysqli_query($conn,$sql)) {
            // echo "ok";
            header('location:../php/music page.php');
          }else{
            echo "faild";
          }
    }
    
    if( strcmp($table,"video")){
        $sql = "INSERT INTO cart (video_id) VALUES ('$id');";
        if(mysqli_query($conn,$sql)) {
            // echo "ok";
            header('location:../php/video page.php');
          }else{
            echo "faild";
          }
    }

   

    

  


?>