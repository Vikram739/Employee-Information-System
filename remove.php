<!-- 
    Document   : remove.php
    Created on : 20 May, 2021, 12:13:11 AM
    Author     : Vikram Markali
-->

<?php
	include('connection.php'); 
	
	 $id=$_POST['id']; 
	 
	 //to prevent from mysqli injection  
      $id = stripcslashes($id); 
	  $id = mysqli_real_escape_string($con, $id); 
        
 		$result = mysqli_query($con,"select *from employee where id = '$id'");
		$data= mysqli_fetch_array( $result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result); 
		        
		if($count == 1)
		{ 
            // sql to delete a record           
            $del = "delete from employee where id = '$id'"; // delete query

            if (mysqli_query($con,$del)) 
            {
                header('location: menu.php?loggedin=Details removed successfully.!!!!');
                exit(); 
            } 
      }    
     else
     {
         header('location: remove_id.php?invalid=Invalid Employee Id.!!!!');
         exit(); 
     }

      $con->close();

?>
	  