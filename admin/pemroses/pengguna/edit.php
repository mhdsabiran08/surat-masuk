<?php 
	require_once ('../koneksi.php');

	$id_admin = $_REQUEST['id_admin'];
	$nama_lengkap = $_REQUEST['nama_lengkap'];
	$username = $_REQUEST['username'];
	$password = md5($_REQUEST['password']);
	$password2 = md5($_REQUEST['password2']);

	echo $password;
	echo $password2;

	$old_password="&id_admin=$id_admin&nama_lengkap=$nama_lengkap&username=$username";

	if (($password != "") AND ($password2 != "")) {
		if ($password == $password2) {
			$pass = $_REQUEST['password'];
			$query = "UPDATE admin SET
			nama_lengkap='".$_POST['nama_lengkap']."',
			username='".$_POST['username']."',
			password='".$password."'
			WHERE id_admin=".$_GET['id_admin']."
			";
			mysqli_query($connect,$query);
			?>
			<script>
			    alert('Berhasil mengubah Data Admin !!!');
			    window.location='../../index.php?p=pengguna/lihat-pengguna';
			</script>";
			<?php
		} else {
			if ($password != $password2) {
				header('location: ../../index.php?p=pengguna/edit-pengguna&error=password_tidak_sama'.$old_password);
			}
		}
	} else {
		$pass = $_REQUEST['old_password'];
		$query = "UPDATE admin SET
		nama_lengkap='".$_POST['nama_lengkap']."',
		username='".$_POST['username']."',
		password='".$password."'
		WHERE id_admin=".$_GET['id_admin']."
		";
		mysqli_query($connect,$query);
		?>
		<script>
		    alert('Berhasil mengubah Data Admin !!!');
		    window.location='../../index.php?p=pengguna/lihat-pengguna';
		</script>";
		<?php
	}
 ?>