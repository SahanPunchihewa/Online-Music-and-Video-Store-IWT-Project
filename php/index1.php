<?php

$conn = new mysqli('localhost','root','','project');

if(isset($_POST["submit"])){
    $search=$_POST["search"];
    $sth=$con->prepare("SELECT * FROM 'project' WHERE MName='$search'");

    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth ->excute();

    if($row = $sth->fetch())
    {
        ?>
        <br><br><br>
        <table>
<tr>
    <th>Mname</th>
    <th>Vname</th>
    
</tr> 
<tr>
    <td><?php echo $row-Mname; ?></td>
    <td><?php echo $row-Vname; ?></td>
</tr>

    </table>
    <?php
    }
    
    else{
        echo "Name does not exist";
    }
}


?>