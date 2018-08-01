<?php 
	require_once("controllers/c_home.php");
	$c_home = new C_home();
	if(isset($_SESSION['user']))
		$c_home->Hien_thi_home();
	else 
		header('location: login.php');
	if(isset($_GET['logout']))
	{
		unset($_SESSION['user']);
		echo '<script>window.location="login.php";</script>';	
	}
?>