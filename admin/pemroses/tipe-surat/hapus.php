<?php 
	require_once '../koneksi.php';

	$query = "DELETE FROM kategori_surat WHERE id_kategori_surat=".$_GET['id_kategori_surat']."
	";
	if ($result = mysqli_query($connect,$query)) {
		header('location: ../../index.php?p=tipe-surat/home');
	} else {
		echo "GAGAL!!! mengubah";
	}
 ?>