<!-- 
    Document   : menu.php
    Created on : 15 May, 2021, 01:13:06 AM
    Author     : Vikram Markali
-->

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>Home Page of Employee Information System</title>
        
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="menu.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    </head>
    <body>
       <?php if(isset($_GET['loggedin'])){ ?>
			<p id="v"> <?php echo $_GET["loggedin"]; ?> </p>
	   <?php }?>
	   
	   <div class="cont">
		  <h4>Home</h4>
			<p>This is the Home<br>page for Employee <br>Information System,<br> Please use all the <br>features present at<br> Left..!!
			</p>
			<form action="index.php">
				<button class="logout" type="submit">Logout</button>
			</form>
			<div class="form sign-in">

				<h1>Employee Information System</h1>
				<h2>Employee Details</h2>
				 <div>
					 <form action="add1.php">
						 <button class="submit" type="submit">Add New Details</button>
					 </form>
					 <form action="update_id.php">
						 <button class="submit" type="submit">Update Details</button>
					 </form>
					 <form action="remove_id.php">
						 <button class="submit" type="submit">Remove Details</button>
					 </form>
					 <form action="display_id.php">
						 <button class="submit" type="submit">Display Details</button>
					 </form>
				  </div>
					  
			</div>

		</div>
		<script>
		$(function() {
			setTimeout(function() { $("#v").fadeOut(1500); }, 5000)
		});
		</script>

    </body>
</html>
