<?php 
	require_once 'koneksi.php';
	$filesize = $_FILES['foto_surat']['size'];
    $file = $_FILES['foto_surat']['tmp_name'];
    $tanggal1 = $_REQUEST['tanggal_diterbitkan'];
    $tanggal2 = $_REQUEST['tanggal_diterima'];

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
        // script untuk menghapus gambar
        $id_surat = $_GET['id_surat'];
        $sql = "SELECT * FROM surat WHERE id_surat='$id_surat'";
        $hapus = mysqli_query($connect,$sql);
        $data = mysqli_fetch_assoc($hapus);
        $nama_foto = $data['foto_surat'];
        unlink("../../admin/image/storage/".$nama_foto);

    	if($_POST['old_foto_surat'] == "") {
            $date = date('m/d/Y h:i:s a', time());
            $filename = "".md5($date).".png";
        } else {
            $filename = $_POST['old_foto_surat'];
        }

		move_uploaded_file($file, "../../admin/image/storage/".$filename."");

		$query = "UPDATE surat SET 
		nomor_surat='".$_POST['nomor_surat']."',
		perihal='".$_POST['perihal']."',
		instansi='".$_POST['instansi']."',
		tanggal_diterbitkan='".$tanggal_diterbitkan."',
		tanggal_diterima='".$tanggal_diterima."',
        nomor_agenda='".$_POST['nomor_agenda']."',
		id_kategori_surat='".$_POST['id_kategori_surat']."',
		id_teruskan_kepada='".$_POST['id_teruskan_kepada']."',
        sifat_surat='".$_POST['sifat_surat']."',
		catatan='".$_POST['catatan']."',
		foto_surat='".$filename."'
		WHERE id_surat=".$_GET['id_surat']."
		";
		if (mysqli_query($connect,$query)) {
            ?>
            <!-- ini adalah cara memotong script php -->
            <script> //akan muncul jika data berhasil diinputkan
                alert('Data Berhasil diubah !!!');
                window.location='../index.php?p=kelola-data/home';
            </script>";
            <?php
        } else {
            echo "GAGAL Update Setelah mengganti gambar !!!";
        }
        ;

    } else {
    	$query = "UPDATE surat SET 
    	nomor_surat='".$_POST['nomor_surat']."',
    	perihal='".$_POST['perihal']."',
    	instansi='".$_POST['instansi']."',
    	tanggal_diterbitkan='".$tanggal_diterbitkan."',
    	tanggal_diterima='".$tanggal_diterima."',
        nomor_agenda='".$_POST['nomor_agenda']."',
    	id_kategori_surat='".$_POST['id_kategori_surat']."',
    	id_teruskan_kepada='".$_POST['id_teruskan_kepada']."',
        sifat_surat='".$_POST['sifat_surat']."',
    	catatan='".$_POST['catatan']."'
    	WHERE id_surat=".$_GET['id_surat']."
    	";
        if (mysqli_query($connect,$query)) {
            ?>
            <!-- ini adalah cara memotong script php -->
            <script> //akan muncul jika data berhasil diinputkan
                alert('Data Berhasil diubah !!!');
                window.location='../index.php?p=kelola-data/home';
            </script>";
            <?php
        } else {
            echo "GAGAL Update Tanpa mengganti gambar !!!!";
        }
    }
 ?>