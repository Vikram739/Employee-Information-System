<!-- 
    Document   : connection.php
    Created on : 8 May, 2021, 11:55:17 PM
    Author     : Vikram Markali
-->


<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "my_db";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?> 