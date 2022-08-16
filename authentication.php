<!-- 
    Document   : authentication.php
    Created on : 8 May, 2021, 11:05:12 PM
    Author     : Vikram Markali
-->


<?php      
    include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
		
			header('location: menu.php?loggedin=Login Successfully.!!!!');
            exit();  
			
        }  
        else{  
			header('location: index.php?error=Wrong username or password.!!!!');
            exit();  
        }     
?> 