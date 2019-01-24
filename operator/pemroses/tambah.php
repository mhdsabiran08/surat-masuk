<?php 
	require_once 'koneksi.php';
	$nomor_surat = $_REQUEST['nomor_surat'];
	$perihal = $_REQUEST['perihal'];
	$instansi = $_REQUEST['instansi'];
	$tanggal1 = $_REQUEST['tanggal_diterbitkan'];
	$tanggal2 = $_REQUEST['tanggal_diterima'];
	$nomor_agenda = $_REQUEST['nomor_agenda'];
	$id_kategori_surat = $_REQUEST['id_kategori_surat'];
	$id_teruskan_kepada = $_REQUEST['id_teruskan_kepada'];
	$sifat_surat = $_REQUEST['sifat_surat'];
	$catatan = $_REQUEST['catatan'];
	$operator_input = $_REQUEST['operator_input'];
	$filesize = $_FILES['foto_surat']['size'];
	$file = $_FILES['foto_surat']['tmp_name'];

	//explode data dari datepicker
	$x = explode(" ", $tanggal1);
    $y = explode("/", $x[0]);
    $bln = $y['0'];
    $tgl = $y['1'];
    $thn = $y['2'];
    $tanggal_diterbitkan = "".$thn."-".$bln."-".$tgl."";

    //explode data dari datetimepicker
    $datetime = explode(" ",$tanggal2);
    $tanggal = $datetime[0];
    $waktu = $datetime[1];
    //explode data tanggal dari datetimepicker
    $a = explode(" ", $tanggal);
    $b = explode("/", $a[0]);
    $mm = $b['0'];
    $dd = $b['1'];
    $yy = $b['2'];
    $date = "".$yy."-".$mm."-".$dd."";
    //explode data waktu dari datetimepicker
    $c = explode(" ", $waktu);
    $d = explode(":", $c[0]);
    $hh = $d['0'];
    $m = $d['1'];
    $ss = $d['2'];
    $time = "".$hh.":".$m.":".$ss."";
    $tanggal_diterima = "".$date." ".$time."";
    

	if ($file != "") {
			$date = date('m/d/Y h:i:s a', time());
			$filename = "".md5($date).".png";
			move_uploaded_file($file, "../../admin/image/storage/".$filename."");
	} else {
		$filename = "";
	}	

	$query = "INSERT INTO surat(nomor_surat,perihal,instansi,tanggal_diterbitkan,tanggal_diterima,nomor_agenda,id_kategori_surat,id_teruskan_kepada,sifat_surat,catatan,operator_input,foto_surat) VALUES('$nomor_surat','$perihal','$instansi','$tanggal_diterbitkan','$tanggal_diterima','$nomor_agenda','$id_kategori_surat','$id_teruskan_kepada','$sifat_surat','$catatan','$operator_input','$filename')";
	
	if ($result = mysqli_query($connect,$query)) {
	?>
	<!-- ini adalah cara memotong script php -->
    <script> //akan muncul jika data berhasil diinputkan
    	alert('Data Berhasil disimpan !!!');
    	window.location='../index.php?p=input-data/home';
    </script>";
	<?php
	} else {
		echo "GAGAL menyimpan !!!";
	}
 ?>