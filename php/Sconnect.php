<?php

    $firstName = $_POST['firstName'];
    $lastName =  $_POST['lastName'];
    $email=      $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    
    $conn = new mysqli ('localhost', 'root', '', 'register');

    if($conn->connect_error) {

        die('Connection Failed : ' .$conn->connection_error);

    }else {

        $stmt = $conn->prepare("insert into registrator(firstName, lastName, email, password, cpassword)values(?, ?, ?, ?, ?)");

        $stmt->bind_param("sssss", $firstName, $lastName, $email, $password, $cpassword);
        $stmt->execute();

        echo "Registrator Successfully...";
        $stmt->close();
        $conn->close();


    }


?>