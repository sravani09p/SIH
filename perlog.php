<?php include('percon.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login form </title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<style>
body {
       background: url("capture11.png") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
	<div class="header">
		<h2>Login Form</h2>
	</div>
	
	<form method="post" action="perlog.php">


		
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="Username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="Password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
	<p>
		Not Yet a Member ? <a href="per.php">Sign Up </a>
	</p>
 
		
	</form>
</body>
</html>


