<?php
	session_start();
    if (!isset($_SESSION["id_operator"] ))
    {
        header('location:login.php');
    }
	include 'bagian/panel.php';
?>