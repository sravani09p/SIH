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
$OrgName="";
$Email="";
$Password="";
$Contact="";
$OrgId="";

$errors=array();


// REGISTER USER
if (isset($_POST['reg_user'])) {
	// receive all input values from the form


	$OrgName = mysqli_real_escape_string($db, $_POST['OrgName']);
	$Email = mysqli_real_escape_string($db, $_POST['Email']);
	$Password = mysqli_real_escape_string($db, $_POST['Password']);
	$Contact = mysqli_real_escape_string($db, $_POST['Contact']);
	$OrgId= mysqli_real_escape_string($db, $_POST['OrgId']);


	//echo $Name;



	// form validation: ensure that the form is correctly filled
	if (empty($OrgName)) { array_push($errors, "Organisation Name is required"); }
	if (empty($Email)) { array_push($errors, "Email is required"); }
	if (empty($Password)) { array_push($errors, "Password is required"); }
	if (empty($Contact)) { array_push($errors, "Contact is required"); }
	if (empty($OrgId)) { array_push($errors, "Organisation Id is required"); }




	// register user if there are no errors in the form
if (count($errors) == 0) {

	$query = "INSERT INTO organisation_details VALUES('$OrgName',  '$Email', '$Password', '$Contact', '$OrgId')";
		if(!mysqli_query($db, $query))
			echo "query error";


		echo '<script>
			window.alert("you are successfully Registered");
 			window.location.href="LoginOrganisation.php";
		</script>';
}
}

// LOGIN USER
if (isset($_POST['login_user'])) {
	$OrgName = mysqli_real_escape_string($db, $_POST['OrgName']);
	$Password = mysqli_real_escape_string($db, $_POST['Password']);
	$query = "SELECT OrgName,Password FROM organisation_details WHERE OrgName='$OrgName' and Password='$Password';";
		if(!$results = mysqli_query($db, $query))
			echo "members not found";

	//echo $Username,$Password;
	if ($OrgName==$OrgName && $OrgName==$Password) {
		//echo mysqli_num_rows($results);
		if (mysqli_num_rows($results) ==1) {
		echo '<script>
			window.alert("you are successfully Logged-in");
			window.location.href="OrganisationHome.html";
		</script>';

		}else {
			echo '<script>
			window.alert("Wrong Organisation Name/password combination");

		</script>';

		}
	}
}

?>
