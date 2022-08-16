<!-- 
    Document   : update_id.php
    Created on : 20 May, 2021, 12:13:11 AM
    Author     : Vikram Markali
-->

<html>
<head>
	<title>Enter Employee Id for Updation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="id.css">
  

</head>
<body>
		<div class="form">
		<?php if(isset($_GET['invalid'])){ ?>
			<p class="invalid"> <?php echo $_GET["invalid"]; ?> </p>
	   <?php }?>
			<form method = 'POST' action = 'retrive.php' >
				<label>
					<span>Update Details</span>
					<input type="number" name="id" placeholder="Enter Employee ID"required>
				</label>
				<button class="submit" type="submit">Submit</button>
			</form>	
				   
		</div>
</body>
</html>