<!-- 
    Document   : retrive.php
    Created on : 17 May, 2021, 12:36:45 AM
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

				<html lang="en" dir="ltr">
				  <head>
				  	<title>Updation For Employee Information System</title>
					<meta charset="UTF-8">
					<link rel="stylesheet" href="retrive.css">
					 <meta name="viewport" content="width=device-width, initial-scale=1.0">
				   </head>
				<body>
				  <div class="container">
					<div class="title">Update Details</div>
					<div class="content">
					
					  <form action="update.php" method="POST">
					  
						<div class="user-details">
						  <div class="input-box">
							<span class="details">Employee ID</span>
							<input type="text" name="id" value="<?php echo $data ['id']; ?> "  placeholder=" Enter Employee ID"required readonly>
						  </div>
						  <div class="input-box">
							<span class="details">Employee Name</span>
							<input type="text" name="name" value="<?php echo $data ['name']; ?> " placeholder=" Enter Employee Name"required>
						  </div>
						  <div class="input-box">
							<span class="details">Phone Number</span>
							<input type="text" name="mobile" value="<?php echo $data ['mobile']; ?> " placeholder=" Enter Mobile No (+91)"required>
						  </div>
						  <div class="input-box">
							<span class="details">Joining Date</span>
							<input type="text" name="date" value="<?php echo $data ['date']; ?> " placeholder=" Enter Joining Date)"required>
						  </div>
						  
						  
						  
						  <div class="input-box">
							 <span class="details">Designation</span>
							 
									<select  class="input-box" type="text" name="designation"  id="desig" required>
											
										<?php	if($data ['designation']=="Manager")
												{?>
													<option value="Manager"Selected>Manager</option>
													<option value="HR" >HR</option>
													<option value="Senior Soft">Senior Soft</option>
													<option value="Junior Soft">Junior Soft</option>
										<?php }?>	
												
										<?php	if($data ['designation']=="HR")
												{?>
													<option value="HR" Selected>HR</option>
													<option value="Manager">Manager</option>
													<option value="Senior Soft">Senior Soft</option>
													<option value="Junior Soft">Junior Soft</option>
										<?php }?>	

										<?php	if($data ['designation']=="Senior Soft")
												{?>
													<option value="Senior Soft"Selected>Senior Soft</option>
													<option value="Manager">Manager</option>
													<option value="HR" >HR</option>								
													<option value="Junior Soft">Junior Soft</option>
										<?php }?>	

										<?php	if($data ['designation']=="Junior Soft")
												{?>
													<option value="Junior Soft"Selected>Junior Soft</option>
													<option value="Manager">Manager</option>
													<option value="HR" >HR</option>
													<option value="Senior Soft">Senior Soft</option>
													
										<?php }?>					
										
									</select>
						 </div>
						  
						  
						  
						  <div class="input-box">
							<span class="details">Salary</span>
							<input type="text" name="salary" value="<?php echo $data ['salary']; ?> "  placeholder=" Enter Employee Salary"required>
						  </div>
						</div>
						<div class="gender-details">
						
						<?php	if($data ['gender']=="male")
						 {?>
								<input type="radio" name="gender" value="male" id="dot-1"required checked>
								<input type="radio" name="gender" value="female" id="dot-2"required>
								<input type="radio" name="gender" value="other" id="dot-3"required>
						<?php }?>	
						
						<?php	if($data ['gender']=="female")
						 {?>
								<input type="radio" name="gender" value="male" id="dot-1"required>
								<input type="radio" name="gender" value="female" id="dot-2"required checked>
								<input type="radio" name="gender" value="other" id="dot-3"required>
						<?php }?>	
						
						<?php	if($data ['gender']=="other")
						 {?>
								<input type="radio" name="gender" value="male" id="dot-1"required>
								<input type="radio" name="gender" value="female" id="dot-2"required>
								<input type="radio" name="gender" value="other" id="dot-3"required checked>
						<?php }?>	
						  
						  
						  
						  <span class="gender-title">Gender</span>
						  <div class="category">
							<label for="dot-1">
							<span class="dot one"></span>
							<span class="gender">Male</span>
						  </label>
						  <label for="dot-2">
							<span class="dot two"></span>
							<span class="gender">Female</span>
						  </label>
						  <label for="dot-3">
							<span class="dot three"></span>
							<span class="gender">Other</span>
							</label>
						  </div>
						</div>
						<div class="button">
						  <input type="submit" value="Update Details">
						</div>
					  </form>
					</div>
				  </div>

				</body>
				</html>

       <?php } 
        else{  
			header('location: update_id.php?invalid=Invalid Employee Id.!!!!');
            exit();  
        }
?>

