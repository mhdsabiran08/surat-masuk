<?php
	require_once '../koneksi.php';
	$id_admin= $_GET['id_admin'];

	$query = "DELETE FROM admin WHERE id_admin = '$id_admin'";
	$hapus = mysqli_query($connect,$query);
	if ($hapus) {
		?>
		<script>
		    alert('Berhasil menghapus Admin !!!');
		    window.location='../../index.php?p=pengguna/lihat-pengguna';
		</script>";
		<?php
	} else {
		echo "GAGAL menghapus !!!";
	}
?>