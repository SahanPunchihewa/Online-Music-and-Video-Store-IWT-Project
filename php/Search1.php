<!DOCTYPE html>
<html>
<head>
<title>ZIK-Music</title>
<a href="search.html"><img align="left" src="images/icon.jpeg" width="200px" height="110px"></a>
<h1>ZIK-Music</h1>

<style>
h1{
    position: relative;
    left:-80px;
    font-family:sans-serif;
    text-align:center;
    color:white;
}
			table{
				border-collapse: collapse;
				width:100%;
				color: #e03a9e;
				font-family: sans-serif;
				font-size: 30px;
				text-align:left;
			}

			th{
				background-color: #0ff5a4;
				color:black;
			}

			tr:nth-child(even){
				background-color:#d7f5eb;
			}
            
            body{
            background-image:url("images/new.jpg"); 
           
            max-width: 100%;
            
            }
            .new{
                background-color:black;
            }
            
		</style>	
</head>
<?php

$con = new PDO("mysql:host=localhost;dbname=search1",'root','');


if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `search` WHERE Name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
        	
		<table>
			<tr>
				<th>Name</th>
				<th>Description</th>
                <th>Catergory</th>
			</tr>
			<tr>
				<td><?php echo $row->Name; ?></td>
				<td><?php echo $row->Description;?></td>
                <td><?php echo $row->Catergory;?></td>
               
			</tr>
           
		</table>
      
<?php 
	}
		
		
		else{
      
       echo '<p style="color:white; position: relative; left:-80px; text-align:center; font-size:50px; font-weight:bold; font-family:sans-serif">oops</p>';
       echo '<p style="color:red; text-align:center; font-size:40px; font-weight:bold; font-family:sans-serif">Name Does not exist</p>';
        
       
		}


}

?>


</html>
