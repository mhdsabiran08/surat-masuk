<?php 
	require_once '../koneksi.php';

	$bagian_teruskan_kepada = $_REQUEST['bagian_teruskan_kepada'];
	$query = "INSERT INTO teruskan_kepada(bagian_teruskan_kepada) VALUES('$bagian_teruskan_kepada')";
	
	if ($simpan = mysqli_query($connect,$query)) {
		header('location: ../../index.php?p=kepada/home');
	} else {
		echo "GAGAL!!! menyimpan data";
	}
 ?>