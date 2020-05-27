<?php
$conn = mysqli_connect('127.0.0.1','root','','try');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
   <html xmlns="http://www.w3.org/1999/xhtml">
   <head>
   	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   	<title>untitled document</title>
   </head>
   <body>
   	
 <?php
   	$q="select * from videoup";
   	$query=mysqli_query($conn,$q);
   	while ($row=mysqli_fetch_assoc($query)) {
   		$id = $row['id'];
   		$name = $row['name'];
   		echo "<a href='watch.php?id=$id'>$name</a><br>";

   	}
 ?>

   </body>
   </html>