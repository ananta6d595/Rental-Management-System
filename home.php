<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<?php session_start(); ?>
<body>
		<h2>Welcome <?php echo $_SESSION['username']; ?> </h2>
<?php

if(!isset($_SESSION['username'])){
	header('location:login.php');
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentinfo";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


$name=$_SESSION['username'];
$result = mysqli_query($con,"SELECT owner_name, name, floor, bill, phone, due FROM tenants_details where owner_name = '$name' ");
$num = mysqli_num_rows($result);


if($num>0){
echo "<h2>tenant Details</h2>";
echo"<br>";
echo "<table border='1'>
<tr>
<th>Ownername</th>
<th>Name</th>
<th>floor</th>
<th>bill</th>
<th>Phone</th>
<th>due</th>
</tr>";


while($row1 = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row1['owner_name'] . "</td>";
echo "<td>" . $row1['name'] . "</td>";
echo "<td>" . $row1['floor'] . "</td>";
echo "<td>" . $row1['bill'] . "</td>";
echo "<td>" . $row1['phone'] . "</td>";
echo "<td>" . $row1['due'] . "</td>";
echo "</tr>";
}
echo "</table>";
}
else{
echo "no owner enlisted";	
}

?>

		<a href= "logout.php">LOGOUT</a>
		
		
</body>

</html>