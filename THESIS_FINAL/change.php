<?php
require('automation.php'); 
$query=$mysqli->query("UPDATE user_status SET status='".$_POST['val']."' WHERE id='".$_POST['id']."' ") or die($mysqli->error());	
	if($query)
	{ 
		$q=$mysqli->query("SELECT * FROM user_status WHERE id='".$_POST['id']."' ");
		$data=mysqli_fetch_assoc($query);
		echo $data['$status'];
		header("Location:automation.php");
	}
?>