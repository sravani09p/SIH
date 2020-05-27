<?php
$conn = mysqli_connect('127.0.0.1','root','','try');
?>
<!DOCTYPE html>
   <html>
   <head>
   	<meta charset="utf-8" />
   	<title>untitled document</title>
   </head>
   <body>
<?php
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q = "select name from videoup where id=$id";
	$query = mysqli_query($conn,$q);
	while($row = mysqli_fetch_assoc($query))
	{
		$name = $row['name'];

	}
	echo "you are watching".$name."<br>";
	echo "<video width='800' controls> <source src='sihvideos/".$name."' type='video/webm'></video>"; 

}
else
{
	echo "error";
}
?>
</body>
</html>