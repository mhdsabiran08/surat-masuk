<?php
	session_start();
	require_once 'koneksi.php';

	$username = mysqli_real_escape_string($connect,$_POST['username']);
	$password = mysqli_real_escape_string($connect,md5($_POST['password']));
	//ket:
	/*mysqli_real_escape_string berfungi agar data-data karakter seperti /'>*& dapat terbaca didatabase' */

	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$result = mysqli_query($connect,$query);

	if ($data = mysqli_fetch_array($result)) {
		$_SESSION['id_admin'] = $data['id_admin'];
		$_SESSION['username'] = $username;
		header('location: ../index.php?p=dashboard');
	} else {
		header('location: ../login.php?p&error=data_login_salah');
	}

 ?>
