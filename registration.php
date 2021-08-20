<?php

session_start();
header('location:login.php');

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


$name = $_POST['user'];
$pass = $_POST['password'];

$q = "SELECT * from users where username = '$name' && password = '$pass' ";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1)
{
echo "duplicate data";
}
else{
		$qy = "insert into users (username, password) values ('$name','$pass')";
		
		mysqli_query($con, $qy);
}

?>
