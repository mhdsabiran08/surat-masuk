<?php 
	require_once ('../koneksi.php');

	$id_operator = $_REQUEST['id_operator'];
	$nama_operator = $_REQUEST['nama_operator'];
	$usnam_operator = $_REQUEST['usnam_operator'];
	$password = md5($_REQUEST['password']);
	$password2 = md5($_REQUEST['password2']);

	echo $password;
	echo $password2;

	$old_password="&id_operator=$id_operator&nama_operator=$nama_operator&usnam_operator=$usnam_operator";

	if (($password != "") AND ($password2 != "")) {
		if ($password == $password2) {
			$pass = $_REQUEST['password'];
			$query = "UPDATE operator SET
			nama_operator='".$_POST['nama_operator']."',
			usnam_operator='".$_POST['usnam_operator']."',
			pass_operator='".$password."'
			WHERE id_operator=".$_GET['id_operator']."
			";
			mysqli_query($connect,$query);
			?>
			<script>
			    alert('Berhasil mengubah Data Operator !!!');
			    window.location='../../index.php?p=pengguna/lihat-operator';
			</script>";
			<?php
		} else {
			if ($password != $password2) {
				header('location: ../../index.php?p=pengguna/edit-operator&error=password_tidak_sama'.$old_password);
			}
		}
	} else {
		$pass = $_REQUEST['old_password'];
		$query = "UPDATE operator SET
		nama_operator='".$_POST['nama_operator']."',
		usnam_operator='".$_POST['usnam_operator']."',
		pass_operator='".$password."'
		WHERE id_operator=".$_GET['id_operator']."
		";
		mysqli_query($connect,$query);
		?>
		<script>
		    alert('Berhasil mengubah Data Operator !!!');
		    window.location='../../index.php?p=pengguna/lihat-operator';
		</script>";
		<?php
	}
 ?>