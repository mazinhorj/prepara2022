<?php
 @session_start();

	require_once('classes/Db.class.php');
	require_once('classes/util.php');
	
	$db = new Db();
	$util = new Util();
	
	$util->msgbox($_session('id_usuario') . " " .$_session('usuario')  );
	
?>