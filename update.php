<!-- 
    Document   : update.php
    Created on : 20 May, 2021, 12:49:32 AM
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

    // attempt update query execution
    $sql = "UPDATE employee SET id=' $id',name='$name',gender='$gender',mobile='$mobile',date='$date',designation='$designation',salary='$salary ' WHERE id='$id'";

    if(mysqli_query($con, $sql)){        
        header('location: menu.php?loggedin=Details updated successfully.!!!!');
        exit(); 
    } else{
        header('location: update_id.php?invalid=Invalid Employee Id.!!!!');
        exit();  
    }

    // close connection
    mysqli_close($con);
?>