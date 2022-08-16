<!-- 
    Document   : display.php
    Created on : 17 May, 2021, 07:10:22 PM
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
		        
		if($count == 1){  ?>

            <!DOCTYPE html>
            <html>
            <head>
                <title>Display Details</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="display.css">
            <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
            
            </head>
            <body>
                    <h1>Employee Details</h1>

                    <div class="form">

                        <form action="menu.php" method="POST">

                                <label for="Employee ID">Employee ID:</label>					
                                <input type="text" name="id"  class="input" value="<?php echo $data ['id']; ?>" placeholder=" Enter Employee ID"required readonly>
                                <br>
                                <label for="Employee Name">Employee Name:</label>				
                                <input type="text" name="name"  class="input" value="<?php echo $data ['name']; ?>" placeholder=" Enter Employee Name"required readonly>
                                <br>				
                                <label for="Employee Gender">Employee Gender:</label>
                                <input type="text" name="gender"  class="input" value="<?php echo $data ['gender']; ?>"  placeholder=" Enter Employee Gender"required readonly>
                                <br>					  
                                <label for="Mobile No">Mobile No:</label>					
                                <input type="text"  class="input" name="mobile" value="<?php echo $data ['mobile']; ?>" placeholder=" Enter Mobile No (+91)"required readonly>
                                <br>
                                <label for="Joining Date">Joining Date:</label>
                                <input type="text" name="date" class="input" value="<?php echo $data ['date']; ?>" placeholder=" Enter Joining Date"required readonly>
                                <br>
                                <label for="Designation">Designation:</label>
                                <input type="text" name="designation" class="input" value="<?php echo $data ['designation']; ?>" placeholder=" Enter Designation" required readonly>
                                <br>					
                                <label for="Salary">Salary:</label>				
                                <input type="number" name="salary" class="input" value="<?php echo $data ['salary']; ?>" placeholder=" Enter Employee Salary"required readonly>
                                <br>
                                <button type="Submit" class="button" name="home">Home</button>
                    
                        </form>
                    </div>
                
                
            </body>
            </html>
 <?php } 
       else
       {  
			header('location: display_id.php?invalid=Invalid Employee Id.!!!!');
            exit();  
        }
?>