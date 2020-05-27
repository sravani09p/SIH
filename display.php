<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "try";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT FullName,Username,DOB,PhoneNo,Gender,State,District,TribeName,Talent,Achievements FROM  per";
$result1 = mysqli_query($conn, $sql);?>
<html>
 <head>
 <title> list of users </title>
 <head><h1 align="center">LIST OF </head>
 <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: ;
}

li {
    float: left;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 3px 5px;
    text-decoration: none;
}

li a:hover {
    background-color: #555;
}
</style>
</head>
<body>

<ul>
  <li><a href="index.html"><b><u>Home</u></a></li></b>


</ul>

</br>
</br>



</style>
</head>


</body>


 <head>
<style>
table {
  border-collapse: collapse;
  width: 95%;
}

th, td {
  text-align: left;
  padding: 1px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
 <body>
  <table  border=1px style="width:90%">
 <tr>
 <th><h1><i><u>FirstName </u></h1></th><th></th></i>
 <th><h1><i><u>LastName </u></h1></th><th></th></i>
 <th><h1><i><u>DOB</u></h1></th><th></th></i>
 <th><h1><i><u>PhoneNo</u></h1></th><th></th></i>
 <th><h1><i><u>Gender</u></h1></th><th></th></i>
 <th><h1><i><u>State</u></h1></th><th></th></i>
 <th><h1><i><u>District</u></h1></th><th></th></i>
 <th><h1><i><u>TribeName</u></h1></th><th></th></i>
 <th><h1><i><u>Talent</u></h1></th><th></th></i>
 <th><h1><i><u>         Achievements       </u></h1></th> </i>
  </tr></body>
 </html>


<?php if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result1)) {
        echo "<tr>";
	 echo "<th>".$row['FullName']."<th>";
	 echo "<th>".$row['Username']."<th>";
	 echo "<th>".$row['DOB']."<th>";
	 echo "<th>".$row['PhoneNo']."<th>";
	 echo "<th>".$row['Gender']."<th>";
	 echo "<th>".$row['State']."<th>";
	 echo "<th>".$row['District']."<th>";
	 echo "<th>".$row['TribeName']."<th>";
	 echo "<th>".$row['Talent']."<th>";
	 echo "<th>".$row['Achievements']."<th>";
	 echo "</tr>";
    }
}
else {
    echo "0 results";
}

mysqli_close($conn);
?>
