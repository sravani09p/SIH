<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<style>
	body {
	       background: url(capture11.png) no-repeat top right fixed;
	  -webkit-background-size: 10;
	  -moz-background-size: 10;
	  -o-background-size: 10;
	  background-size: 10;
		align-items: center;
	}
	</style>
</head>
<body>
	<!-- <a href="video.php">Videos</a></br> -->
   <center>
		 <br>
		 <br><br><br>
	<form method="post" enctype="multipart/form-data">
		<!-- <div class="input-group">
			<label>Candidate Name</label>
			<input type="text" name="CandName">
		</div>


		<div class="input-group">
			<label>State</label>
			<input type="text" name="state">
		</div>

		<div class="input-group">
			<label>District</label>
			<input type="text" name="dist">
		</div>

		<div class="input-group">
			<label>Contact</label>
			<input type="text" name="cont">
		</div>

		<div class="input-group">
			<label>Talent</label>
			<input type="text" name="talent">
		</div> -->

		<input type="file" name="file"/><br><br>
		<input type="submit" name="submit" value="Upload" />




	</form>
	<?php
	$conn = mysqli_connect('127.0.0.1','root','','try');
	if (isset($_POST['submit']))
	{
		$name = $_FILES['file']['name'];
		$temp = $_FILES['file']['tmp_name'];


		move_uploaded_file("$temp","sihvideos".$name);
		$q = "INSERT INTO videoup(id,name) values ('', '$name')";
		if(mysqli_query($conn,$q))
		{
			echo "submitted to database..";
		}
		echo "<br>".$name."has been uploaded.";

	}
	?>

</body>
</html>
