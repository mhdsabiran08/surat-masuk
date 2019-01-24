<?php 
    extract($_REQUEST);
    require_once '../koneksi.php';

    //script untuk menghapus foto yang ada di folder
    $select = "SELECT * FROM surat WHERE id_surat='$id_surat'";
    $hasil = mysqli_query($connect,$select);
    $data = mysqli_fetch_array($hasil);
    $namaFile = $data['foto_surat']; //nama file foto surat

    unlink('../../image/storage/'.$namaFile); //hapus gambar dari folder

    //script untuk menghapus nama foto didatabase
    $query = "DELETE FROM surat WHERE id_surat='$id_surat'";
    $result = mysqli_query($connect,$query);
?>
    <!-- ini adalah cara memotong script php -->
    <script> //akan muncul jika data berhasil diinputkan
        alert('Data Berhasil dihapus !!!');
        window.location='../../index.php?p=data-surat/kelola-data';
    </script>";