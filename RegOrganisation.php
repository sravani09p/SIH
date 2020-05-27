<?php include('Orgcon.php'); ?>
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

	<form method="post" action="RegOrganisation.php">
		<?php include('errors1.php');?>


		<div class="input-group">
			<label>Organisation Name</label>
			<input type="text" name="OrgName">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="Email">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="Password">
		</div>
		<div class="input-group">
			<label>Contact</label>
			<input type="text" name="Contact">
		</div>
		<div class="input-group">
			<label>Organisation Id</label>
			<input type="number" name="OrgId">
		</div>


		<div class="input-group">
			<button type="submit" class="btn"  name="reg_user">ALL SET</button>

		<div class="input-group">
			<button type="RESET" class="btn"  name="reg_user">RESET</button>
		</div>
		<p>
		Already have a account ? <a href="LoginOrganisation.php">login </a>
	</p>

	</form>
</body>
</html>
