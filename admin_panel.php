<?php
session_start();

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

$result1 = mysqli_query($con,"SELECT * FROM owner_details");

echo "<h2>Owner Details</h2>";
echo"<br>";
echo "<table border='1'>
<tr>
<th>OwnerID</th>
<th>Name</th>
<th>Address</th>
<th>Phone</th>
<th>Area</th>
<th>total_bill</th>
</tr>";

while($row1 = mysqli_fetch_array($result1))
{
echo "<tr>";
echo "<td>" . $row1['id'] . "</td>";
echo "<td>" . $row1['name'] . "</td>";
echo "<td>" . $row1['address'] . "</td>";
echo "<td>" . $row1['phone'] . "</td>";
echo "<td>" . $row1['area'] . "</td>";
echo "<td>" . $row1['total_bill'] . "</td>";
echo "</tr>";
}
echo "</table>";


echo "
<p> Or
<a href='logout.php'> Logout</a>
</p>";

?>

<!DOCTYPE htlm>
<html>
<head>
		<title> Tenants detalis </title>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
		<div class ="container">
				<div class="row">
						<div style="background-color:lightblue" class="col-lg-4">
				
				<h3>  Input owner name to see it's tenant </h3>
				
			<form action="tenant.php" method ="post" > 
				
							<lable> Ownername </lable>
							<input type="text" name="owner" class="form-control">
							<br>
							
							<button type= "submit" class = "btn btn-primary"> Input </button>
			</form>
				</div> 
		</div>
			
			
</body>
</html>