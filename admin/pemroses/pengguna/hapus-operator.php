<?php
	require_once '../koneksi.php';
	$id_operator= $_GET['id_operator'];

	$query = "DELETE FROM operator WHERE id_operator = '$id_operator'";
	$hapus = mysqli_query($connect,$query);
	if ($hapus) {
		?>
		<script>
		    alert('Berhasil menghapus Operator !!!');
		    window.location='../../index.php?p=pengguna/lihat-operator';
		</script>";
		<?php
	} else {
		echo "GAGAL menghapus !!!";
	}
?>