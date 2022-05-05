<?php
session_start();
ob_start();
$id = 0;
$update = false;
$threshhigh = '';
$threshlow = '';
// $hostt = "127.0.0.1";
// $userr = "root";
// $passs = "";
// $dbname = "automfinal";
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
$mysqli = new mysqli($hostt, $userr, $passs, $dbname);
if(isset($_GET['edit']))
{
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM automfin where id=$id") or die($mysqli->error());
	if(count($result) == 1)
	{
		$row = $result->fetch_array();
		$threshhigh = $row['threshhigh'];
		$threshlow = $row['threshlow'];
	}
}
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$threshhigh = $_POST['threshhigh'];
	$threshlow = $_POST['threshlow'];
	$mysqli->query("UPDATE automfin SET threshhigh='$threshhigh', threshlow='$threshlow' WHERE id=$id") or die($mysqli->error());
	$_SESSION['message'] = "Threshold has been changed!";
	$_SESSION['msg_type'] = "warning";
	header("Location:automation.php");
}
ob_end_flush();
?>