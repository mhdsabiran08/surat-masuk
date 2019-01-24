<?php 
	require_once '../koneksi.php';

	$query = "UPDATE teruskan_kepada SET bagian_teruskan_kepada='".$_POST['bagian_teruskan_kepada']."'
	WHERE id_teruskan_kepada=".$_GET['id_teruskan_kepada']."
	";
	if ($result = mysqli_query($connect,$query)) {
		header('location: ../../index.php?p=kepada/home');
	} else {
		echo "GAGAL!!! mengubah";
	}
 ?>