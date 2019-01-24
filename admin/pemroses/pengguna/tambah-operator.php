<?php
	require_once ('../koneksi.php');


	$nama_operator = $_REQUEST['nama_operator'];
	$usnam_operator = $_REQUEST['usnam_operator'];
	$password = md5($_REQUEST['password']);
	$password2 = md5($_REQUEST['password2']);

	$old_value="&nama_operator=$nama_operator&usnam_operator=$usnam_operator";

	if ($password == $password2)
	{
		$tambah = "INSERT INTO operator(nama_operator, usnam_operator, pass_operator)
		VALUES ('$nama_operator','$usnam_operator','$password')";
		mysqli_query($connect,$tambah);
		?>
		<script>
		    alert('Berhasil menambahkan Operator !!!');
		    window.location='../../index.php?p=pengguna/lihat-operator';
		</script>";
		<?php
	}
	else
	{
		header('location:../../index.php?p=pengguna/input-operator&error=password_tidak_sama'.$old_value);
	}
	
?>