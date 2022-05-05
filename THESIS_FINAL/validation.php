<?php
session_start();
session_destroy();
// $hostt = "127.0.0.1";
// $userr = "root";
// $passs = "";
// $dbname = "register";
// $dbport = "3306";
// $dbnames = "mysql";
// $hostt = "localhost";
// $userr = "id12735165_test123";
// $passs = "testroot";
// $dbname = "id12735165_test";
// $dbport = "3306";
// $dbnames = "mysql";
$hostt = "localhost";
$userr = "u678040556_richganguser";
$passs = "richgangroot";
$dbname = "u678040556_richgangdb";
$dbport = "3306";
$dbnames = "mysql";
$con = new mysqli($hostt, $userr, $passs, $dbname);
$name = $_POST['user'];
$pass = $_POST['password'];
$result = $con->query("SELECT * FROM usertable WHERE name = '$name' && password = '$pass'");
$num = mysqli_num_rows($result);
if($num == 1)
{
	header("Location:dashboard.php");
}
else
{
	header("Location:index.php");
}
?>

