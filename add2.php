<!-- 
    Document   : add2.php
    Created on : 8 May, 2021, 10:18:15 PM
    Author     : Vikram Markali
-->




<?php
    include('connection.php');

    // Check connection

    if($con === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
	
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $designation = mysqli_real_escape_string($con, $_POST['designation']);
	$salary = mysqli_real_escape_string($con, $_POST['salary']);

    // attempt insert query execution
    $sql = "INSERT INTO employee  VALUES ('$id', '$name', '$gender', '$mobile', '$date', '$designation', '$salary')";

    if(mysqli_query($con, $sql)){
       
        header('location: menu.php?loggedin=Details added successfully.!!!!');
        exit(); 
    } else{
        header('location: add1.php?invalid=Invalid Employee Id.!!!!');
        exit();  
    }

    // close connection
    mysqli_close($con);
?>