<!-- 
    Document   : display_id.php
    Created on : 14 May, 2021, 11:51:37 AM
    Author     : Vikram Markali
-->


<html>
<head>
	<title>Enter Employee Id for Display Details</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="id.css">
  

</head>
<body>
		<div class="form">
		<?php if(isset($_GET['invalid'])){ ?>
			<p class="invalid"> <?php echo $_GET["invalid"]; ?> </p>
	   <?php }?>
			<form method = 'POST' action = 'display.php' >
				<label>
					<span>Display Details</span>
					<input type="number" name="id" placeholder="Enter Employee ID"required>
				</label>
				<button class="submit" type="submit">Submit</button>
			</form>	
				   
		</div>
</body>
</html>