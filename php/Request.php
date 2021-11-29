<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/formstyles.css">
<!-- add a title (a) -->
<title >
Request page
</title>
<script src="js/myScript.js">

</script>

</head>
<body>
<?php include('php/navigation.php');?>
<br><br><br><br><br>
<center>
<h3 class="regH">Request Form</h3>

<form action="../php/connect.php" method="post" onsubmit="" class="framstyles">
      First Name:<br/>
	  <input type="text" name="Firstname" placeholder="First Name" required><br/><br/>
	  Last Name:<br/>
	   <input type="text" name="lastname" placeholder="Last Name" required><br/><br/>
	    Email:<br/>	   
	    <input type="email" name="email" placeholder="Zikmusic@info.com" pattern="[a-z0-9.%+-]+@[a-z0-9._]+\.[a-z]{2.3}" required><br/><br/>
	  Type:<br/>
       <input type="radio" name="Type" checked value="m" >Music 
       <input type="radio" name="Type" checked value="v">video<br/><br/>	
     
     	 
		Discription:<br/>
		<textarea  name="Discription" rows="8" cols="50" required></textarea></br></br>
		
		
		<input type="checkbox" id="checkbox" onchange="enableButton()">Accept privacy policy and terms</br></br>
		<input type="submit" id="submitBtn" value="submit"disabled="disabled">
</form>
</center>


</body>
</html>
<?php include('php/footer.php');?>