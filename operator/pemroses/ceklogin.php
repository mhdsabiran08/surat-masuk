<?php
	session_start();
	require_once 'koneksi.php';

	$usnam_operator = mysqli_real_escape_string($connect,$_POST['usnam_operator']);
	$pass_operator = mysqli_real_escape_string($connect,md5($_POST['pass_operator']));

	$query = "SELECT * FROM operator WHERE usnam_operator='$usnam_operator' AND pass_operator='$pass_operator'";
	$result = mysqli_query($connect,$query);

	if ($data = mysqli_fetch_array($result)) {
		$_SESSION['id_operator'] = $data['id_operator'];
		$_SESSION['nama_operator'] = $data['nama_operator'];
		$_SESSION['usnam_operator'] = $data['usnam_operator'];
		header('location: ../index.php?p=dashboard');
	} else {
		header('location: ../login.php?p&error=data_login_salah');
	}

 ?>
