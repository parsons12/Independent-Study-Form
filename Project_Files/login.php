<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header1" class="bounceInUp">
  	<h2>Login</h2>
  </div>
  <form  class="content1" method="post" action="verifyuser.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group1">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group1">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
	<hr />
  	<div class="input-group1">
  		<button type="submit" class="btn1" name="login_user">Login</button>
  	</div>

	<?php
		session_start();
		if($_SESSION['redirected'] ) {
			echo "Incorrect username or password!";
		}
		
		$_SESSION['redirected'] = false;
		$_SESSION['loggedin'] = false;
		
	?>
  	<p>
  		</br>Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>