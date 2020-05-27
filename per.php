<?php include('percon.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	</br>
	</br>

</head>
<body>
<style>

body {
       background: url(capture11.png) no-repeat top right fixed; 
  -webkit-background-size: 10;
  -moz-background-size: 10;
  -o-background-size: 10;
  background-size: 10;
}
</style>
<marquee width="100%" direction="right" height="500%" color:"#ffcc00">

    
</marquee>
	<div class="header">
		<h2>Registration & Personal details</h2>
	</div>
	
	<form method="post" action="per.php">
		<?php include('errors1.php');?>


		<div class="input-group">
			<label> FullName</label>
			<input type="text" name="FullName">
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="Username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="Password">
		</div>
		<div class="input-group">
			<label>DOB</label>
			<input type="date" name="DOB">
		</div>
		<div class="input-group">
			<label>PhoneNo</label>
			<input type="number" name="PhoneNo">
		</div>
		<div class="input-group">
			<label>Gender</label>
			 <input type="text" name="Gender">
		</div>
		<div class="input-group">
			<label>State</label>
			<input type="text" name="State">
		</div>
		<div class="input-group">
			<label>District</label>
			<input type="text" name="District">
		</div>
		<div class="input-group">
			<label>TribeName</label>
			<input type="text" name="TribeName">
		</div>
		<div class="input-group">
			<label>Talent</label>
			<input type="text" name="Talent">
		</div>
		<div class="input-group">
			<label>Achievements</label>
			<input type="text" name="Achievements">
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn"  name="reg_user">ALL SET</button>

		<div class="input-group">
			<button type="RESET" class="btn"  name="reg_user">RESET</button>
		</div>
		<p>
		Already have a account ? <a href="perlog.php">login </a>
	</p>
		
	</form>
</body>
</html>


