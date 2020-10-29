<?php
session_start();
unset(
		$_SESSION['usuario'],
		$_SESSION['senha']
	);
session_destroy();
header ("Location:index.php");
?>