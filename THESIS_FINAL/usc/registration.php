<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

	<h4 class="w3-xxlarge w3-center">

			<b>REGISTRATION SUCCESSFUL!</b>

		</h4>
<div class="w3-center w3-padding w3-hover-opacity-on">
<a href="index.php" style="width:10%;" class="" ><button style="background-color: rgb(240,240,240)">Back to login page</button></a>
</div>

	<head>
<?php

$hostt = "localhost";
$userr = "u678040556_richganguser";
$passs = "richgangroot";
$dbname = "u678040556_richgangdb";
$dbport = "3306";
$dbnames = "mysql";
// $hostt = "localhost";
// $userr = "id12735165_test123";
// $passs = "testroot";
// $dbname = "id12735165_test";
// $dbport = "3306";
// $dbnames = "mysql";

$con = new mysqli($hostt, $userr, $passs, $dbname);



$name = $_POST['user'];
$pass = $_POST['password'];


$result = $con->query("SELECT * FROM usertable WHERE name = '$name'");

$num = mysqli_num_rows($result);

if($num == 1)
{

	echo" Username already taken!";


}

else
{

	
	$con->query("INSERT INTO usertable(name,password) VALUES ('$name','$pass')");

}


?>


</head>
</body>
</html>
