<?php 
	if (isset($_GET['p'])) {
		$page = $_GET['p'];
		include 'bagian/panel.php';
		include 'halaman/'.$page.'.php';
	} else {
		include 'bagian/panel.php';
		include 'halaman/home.php';
	}
 ?>