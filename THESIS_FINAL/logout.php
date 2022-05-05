<?php
session_start();
session_destroy();
ob_start();
unset($_SESSION['user']);
$_SESSION['message'] = "You are now logged out!";
header("Location:index.php");
ob_end_flush();
exit();
?>

