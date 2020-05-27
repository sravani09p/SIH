<?php
session_start();
// connect to database
$db = mysqli_connect('localhost', 'root', '');
if(!$db)
{
	echo 'Not connected to database';
}

if(!mysqli_select_db($db,'try'))
{
	echo 'Database not selected';
}
/*if($db)
	echo "success";*/
$FullName="";
$Username="";
$Password="";
$DOB="";
$PhoneNo="";

$Gender="";
$State="";
$District="";
$TribeName="";
$Talent="";
$Achievements="";
$errors=array();


// REGISTER USER
if (isset($_POST['reg_user'])) {
	// receive all input values from the form


	$FullName = mysqli_real_escape_string($db, $_POST['FullName']);
	$Username = mysqli_real_escape_string($db, $_POST['Username']);
	$Password = mysqli_real_escape_string($db, $_POST['Password']);
	$DOB = mysqli_real_escape_string($db, $_POST['DOB']);
	$PhoneNo= mysqli_real_escape_string($db, $_POST['PhoneNo']);

	$Gender = mysqli_real_escape_string($db, $_POST['Gender']);
	$State= mysqli_real_escape_string($db, $_POST['State']);
	$District = mysqli_real_escape_string($db, $_POST['District']);
	$TribeName = mysqli_real_escape_string($db, $_POST['TribeName']);
	$Talent = mysqli_real_escape_string($db, $_POST['Talent']);
	$Achievements = mysqli_real_escape_string($db, $_POST['Achievements']);

	//echo $Name;



	// form validation: ensure that the form is correctly filled
	if (empty($FullName)) { array_push($errors, "FullName is required"); }
	if (empty($Username)) { array_push($errors, "Username is required"); }
	if (empty($Password)) { array_push($errors, "Password is required"); }
	if (empty($DOB)) { array_push($errors, "DOB is required"); }
	if (empty($PhoneNo)) { array_push($errors, "PhoneNo is required"); }
	if (empty($Gender)) { array_push($errors, "Gender is required"); }

	if (empty($State)) { array_push($errors, " State is required"); }
	if (empty($District)) { array_push($errors, "District is required"); }
	if (empty($TribeName)) { array_push($errors, "TribeName is required"); }
	if (empty($Talent)) { array_push($errors, "Talent is required"); }
	if (empty($Achievements)) { array_push($errors, "Achievements is required"); }



	// register user if there are no errors in the form
if (count($errors) == 0) {

	$query = "INSERT INTO per VALUES('$FullName',  '$Username', '$Password', '$DOB', '$PhoneNo', '$Gender', '$State', '$District',  '$TribeName', '$Talent', '$Achievements')";
		if(!mysqli_query($db, $query))
			echo "query error";


		echo '<script>
			window.alert("you are successfully Registered");
 			window.location.href=" perlog.php";
		</script>';
}
}

// LOGIN USER
if (isset($_POST['login_user'])) {
	$Username = mysqli_real_escape_string($db, $_POST['Username']);
	$Password = mysqli_real_escape_string($db, $_POST['Password']);
	$query = "SELECT Username,Password FROM per WHERE Username='$Username' and Password='$Password';";
		if(!$results = mysqli_query($db, $query))
			echo "members not found";

	//echo $Username,$Password;
	if ($Username==$Username && $Password==$Password) {
		//echo mysqli_num_rows($results);
		if (mysqli_num_rows($results) ==1) {
		echo '<script>
			window.alert("you are successfully Logged-in");
			window.location.href="CandidateHome.html";
		</script>';

		}else {
			echo '<script>
			window.alert("Wrong username/password combination");

		</script>';

		}
	}
}

?>
