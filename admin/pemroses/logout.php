<?php
	session_start();
	unset($_SESSION['id_admin']);
	unset($_SESSION['username']);
	session_destroy();
	header('location: ../login.php');
?>