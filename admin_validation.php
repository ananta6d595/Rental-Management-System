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

$name = $_POST['user'];
$pass = $_POST['password'];

$q = "SELECT * from admin where admin_username = '$name' && admin_password = '$pass' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1)
{
		$_SESSION['username'] = $name;
		header('location:admin_panel.php');
}
else{
		header('location:login.php');
}

?>
