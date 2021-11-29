<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
	<link rel="stylesheet" href="../css/snow1.css">
    <style>
            body{
            background-image:url("../image/2.jpg");  
            }
            </style>
</head>
<body>
<?php include('../php/navigation.php');?>

<div class="box">
<center>

<form action="../php/search1.php" method="post" onsubmit="" class="">
<h1>Search</h1>
<input type="text" name="search">
<input type="submit" name="submit">
	
</form>
</center>
</div>

</body>
</html>
