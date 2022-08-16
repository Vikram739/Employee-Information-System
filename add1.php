<!-- 
    Document   : add1.php
    Created on : 7 May, 2021, 08:48:55 PM
    Author     : Vikram Markali
-->

<!DOCTYPE html>
<html>
<head>
	<title>Add New Details</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="add1.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
  
</head>
<body>
		<h1>Add New Details</h1>

		<div class="form">

			<form action="add2.php" method="POST">
				<label for="Employee ID">Employee ID:</label>
					<br>
					<input type="number" name="id"  class="input" placeholder=" Enter Employee ID"required>
					<br>
					<label for="Employee Name">Employee Name:</label>
					<br>
					<input type="text" name="name"  class="input" placeholder=" Enter Employee Name"required>
					<br>
					
					<label for="Select Gender">Select Gender:</label><br>
					  <input type="radio" id="male" class="radio1" name="gender" value="male"required>
					  <label for="male" class="radio1">Male</label>
					  <input type="radio" id="female" class="radio2" name="gender" value="female"required>
					  <label for="female" class="radio2">Female</label>
					  <input type="radio" id="other" class="radio3" name="gender" value="other"required>
					  <label for="other" class="radio3">Other</label>
					  <br>
					  
					  <label for="Mobile No">Mobile No:</label>
					  <br>
					  <input type="number"  class="input" name="mobile" placeholder=" Enter Mobile No (+91)"required>
					  <br>
					  <label for="Joining Date">Joining Date:</label>
					  <br>
					  <input type="date" name="date" class="input" placeholder=" Enter Joining Date"required>
					  <br>
					 <label for="Designation">Designation:</label>
					 <br>	
					 
					<select id="Company" class="input" name="designation" required>
						<option value="Select Designation" Deselected> Select Designation</option>
						<option value="Manager">Manager</option>
						<option value="HR">HR</option>
						<option value="Senior Soft">Senior Soft</option>
						<option value="Junior Soft">Junior Soft</option>
					</select>
					<br>
					
					<label for="Salary">Salary:</label>
					<br>
					<input type="number" name="salary" class="input" placeholder=" Enter Employee Salary"required>
					<br>
					<button type="Submit" class="button" name="submit">Submit</button>
		
			</form>
			<?php if(isset($_GET['invalid'])){ ?>
				<p class="invalid"> <?php echo $_GET["invalid"]; ?> </p>
	        <?php }?>
			         <img class="voda" src="images/vodafone.gif" >		
					 
				</div>
	
	
</body>
</html>