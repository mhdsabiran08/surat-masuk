<?php 
$dbhost = 'localhost'; 
$dbuser = 'root';     
$dbpass = '';         
$dbname = 'db_surat';
 
// melakukan koneksi ke database
$connect = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname);
 
// cek koneksi yang kita lakukan berhasil atau tidak
if (mysqli_connect_error())
{
echo "MySQLi Connection was not established: " . mysqli_connect_error();
}
?>
