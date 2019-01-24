<?php
	if(isset($_GET['p']))
	{
	    $page = $_GET['p'];
        include 'bagian/panel.php'; //kerangka tampilan header dan sidebar
        include 'halaman/'.$page.'.php'; //halaman yang bersifat dinamis
    }
    else
    {
        header("Location:login.php"); //jika pengguna belum login akan diarahkan ke halaman login.php
    }
 ?>