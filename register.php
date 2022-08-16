<!-- 
    Document   : register.php
    Created on : 15 May, 2021, 12:13:06 PM
    Author     : Vikram Markali
-->



<?php
    include('connection.php');
    // Check connection

    if($con === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // attempt insert query execution
    $sql = "INSERT INTO login (email, username, password) VALUES ('$email', '$username', '$password')";

    if(mysqli_query($con, $sql)){
        header('location: index.php?msg=Sign up Successfully.!!!!');
        exit();  
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }

    // close connection
    mysqli_close($con);
?>