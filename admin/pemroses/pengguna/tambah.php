<?php
	require_once ('../koneksi.php');


	$nama_lengkap = $_REQUEST['nama_lengkap'];
	$username = $_REQUEST['username'];
	$password = md5($_REQUEST['password']);
	$password2 = md5($_REQUEST['password2']);

	$old_value="&nama_lengkap=$nama_lengkap&username=$username";

	if ($password == $password2)
	{
		$tambah = "INSERT INTO admin(nama_lengkap, username, password)
		VALUES ('$nama_lengkap','$username','$password')";
		mysqli_query($connect,$tambah);
		?>
		<script>
		    alert('Berhasil menambahkan Admin !!!');
		    window.location='../../index.php?p=pengguna/lihat-pengguna';
		</script>";
		<?php
	}
	else
	{
		header('location:../../index.php?p=pengguna/input-pengguna&error=password_tidak_sama'.$old_value);
	}
	
?>