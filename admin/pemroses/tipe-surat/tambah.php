<?php 
	require_once '../koneksi.php';

	$nama_kategori_surat = $_REQUEST['nama_kategori_surat'];
	$query = "INSERT INTO kategori_surat(nama_kategori_surat) VALUES('$nama_kategori_surat')";
	
	if ($simpan = mysqli_query($connect,$query)) {
		header('location: ../../index.php?p=tipe-surat/home');
	} else {
		echo "GAGAL!!! menyimpan data";
	}
 ?>