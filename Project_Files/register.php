
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header1">
  	<h2>Register</h2>
  </div>
  <form  class="content1"method="post" action="insert.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group1">
  	  <label>Username</label>
  	  <input type="text" name="username">
  	</div>
	<?php
		session_start();
		if($_SESSION['nonunique'] ) {
			echo "Username unavailable!";
		}
		$_SESSION['nonunique'] = false;
		
	?>
  	<div class="input-group1">
  	  <label>Email</label>
  	  <input type="email" name="email">
  	</div>
  	<div class="input-group1">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group1">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
	<hr />
  	<div class="input-group1">
  	  <button type="submit" class="btn1" name="reg_user" value="reg">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
	
  </form>
</body>
</html>