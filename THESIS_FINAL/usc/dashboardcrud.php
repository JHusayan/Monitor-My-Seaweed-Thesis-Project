<?php
session_start();
ob_start();
$id = 0;
$update = false;
$parameterfin = '';
$optimalfin = '';
$hostt = "localhost";
$userr = "u678040556_richganguser";
$passs = "richgangroot";
$dbname = "u678040556_richgangdb";
$dbport = "3306";
$dbnames = "mysql";
$mysqli = new mysqli($hostt, $userr, $passs, $dbname);
if(isset($_POST['save']))
{
	$parameterfin = $_POST['parameterfin'];
	$optimalfin = $_POST['optimalfin'];
	$mysqli->query("INSERT INTO datafin (parameterfin, optimalfin) VALUES ('$parameterfin','$optimalfin') ") or die($mysqli->error);
	$_SESSION['message'] = "New parameter has been added!";
	$_SESSION['msg_type'] = "success";
	header("Location:dashboard.php");
}
if(isset($_GET['delete']))
{
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM datafin WHERE id=$id") or die($mysqli->error());
	$_SESSION['message'] = "Parameter has been deleted!";
	$_SESSION['msg_type'] = "danger";
}
if(isset($_GET['edit']))
{
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM datafin where id=$id") or die($mysqli->error());
	if(count($result) == 1)
	{
		$row = $result->fetch_array();
		$parameterfin = $row['parameterfin'];
		$optimalfin = $row['optimalfin'];
	}
}
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$parameterfin = $_POST['parameterfin'];
	$optimalfin = $_POST['optimalfin'];
	$mysqli->query("UPDATE datafin SET parameterfin='$parameterfin', optimalfin='$optimalfin' WHERE id=$id") or die($mysqli->error());
	$_SESSION['message'] = "Parameter has been updated!";
	$_SESSION['msg_type'] = "warning";
	header("Location:dashboard.php");
}
ob_end_flush();
?>