<?php
	@session_start();
	require("controllers/c_home.php");
	require_once("controllers/c_checkout.php");
	$c_checkout = new C_checkout();
	$c_home = new C_home();
	if(isset($_GET['success']))
		$c_checkout->Hien_thi_confirmation();
	$c_home->Hien_thi_home();
?>