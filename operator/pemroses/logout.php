<?php
	session_start();
	unset($_SESSION['id_operator']);
	unset($_SESSION['usnam_operator']);
	unset($_SESSION['nama_operator']);
	session_destroy();
	header('location: ../login.php');
?>