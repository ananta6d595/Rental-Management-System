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


$name=$_POST['owner'];
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

echo "
<p> Or
<a href='logout.php'> Logout</a>
</p>";

?>
