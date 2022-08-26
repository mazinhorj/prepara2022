<?php
 @session_start();

	require_once('classes/Db.class.php');
	require_once('classes/util.php');
	
	$db = new Db();
	$util = new Util();
	
	print_r($_SESSION);
	
	echo $_SESSION['id_usuario'] . " " . $_SESSION['usuario'];
	
	
?>