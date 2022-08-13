<!-- 
    Document   : index.php
    Created on : 13 may, 2021, 12:13:22 PM
    Author     : Vikram Markali
-->



<!DOCTYPE html>
<html>
<head>
	<title>Login For Employee Information System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="login.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">

</head>
<body>

  <div class="cont">
    <div class="form sign-in">
	   <?php if(isset($_GET['error'])){ ?>
			<p class="v"> <?php echo $_GET["error"]; ?> </p>
	   <?php }?>
     <?php if(isset($_GET['msg'])){ ?>
			<p class="v1"> <?php echo $_GET["msg"]; ?> </p>
	   <?php }?>
        <h1>Employee Information System</h1>
      <h2>Sign In</h2>
      <div>
     <form method = 'POST' action = 'authentication.php' >

      <label>
        <input type="text" name="username"placeholder="Enter Username" required>
      </label>
      <label>
        <input type="password" name="password" placeholder="Enter Password" required>
      </label>
     <button class="submit" type="submit">Sign In</button>
	  </form>
	  </div>
      <p class="forgot-pass">Forgot Password ?</p>
    </div>
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h3>New here?</h3>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h3>One of us?</h3>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
   
	
        <h2>Sign Up</h2>
		<form action = 'register.php' method = 'POST'>
        <label>
       
          <input type="email" name="email"placeholder="Enter Email Id" required>
        </label>
        <label>
         
          <input type="text" name="username"placeholder="Enter Username" required>
        </label>
        <label>
          
          <input type="password" name="password"placeholder="Enter Password" required>
        </label>
        <label>
          
          <input type="text"name="key"placeholder="Enter Secret Key" required>
        </label>
        <button type="submit" class="submit" ">Sign Up Now</button>
    </form>
      </div>
    </div>
  </div>  

<script type="text/javascript" src="script.js"></script>


</body>
</html>
