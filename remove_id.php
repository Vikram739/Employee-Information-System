<!-- 
    Document   : remove_id.php
    Created on : 15 May, 2021, 01:44:00 PM
    Author     : Vikram Markali
-->

<html>
<head>
	<title>Enter Employee Id for Deletion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="id.css">
  

</head>
<body>
		<div class="form">
		<?php if(isset($_GET['invalid'])){ ?>
			<p class="invalid"> <?php echo $_GET["invalid"]; ?> </p>
	   <?php }?>
			<form method = 'POST' action = 'remove.php' >
				<label>
					<span>Remove Details</span>
					<input type="number" name="id" placeholder="Enter Employee ID"required>
				</label>
				<button class="submit" type="submit">Submit</button>
			</form>	
				   
		</div>
</body>
</html>