 <?php
  $Firstname=$_POST['Firstname'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
  $Type=$_POST['Type'];
  $Discription=$_POST['Discription'];
  
  
  //Database Connection 
  
  $conn=new mysqli('localhost','root','','zik_music');
  
  if($conn->connect_error){
	  
	  die('connection failed :'.$conn->connect_error);
	  
  }else{ 
	  
	  $stmt=$conn->prepare("insert into details(Firstname,lastname,email,Type,Discription) values(?,?,?,?,?)");
	  $stmt->bind_param("sssss",$Firstname,$lastname,$email,$Type,$Discription);
      $stmt->execute();
echo"Request Added Successfully...";	 
      $stmt->close();
	  $conn->close(); 
      	  
  }
  
   
  
 
 ?>