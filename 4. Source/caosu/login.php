<?php
	@session_start();
	require_once("controllers/c_account.php");
	$c_account = new C_account();
	$c_account->Hien_thi_account();
?>