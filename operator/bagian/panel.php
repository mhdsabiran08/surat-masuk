<!DOCTYPE html>
<html lang="en">

<?php 
    include 'pemroses/koneksi.php';
    $id_operator =  $_SESSION['id_operator'];
    $query = "SELECT * FROM operator WHERE id_operator = '$id_operator'";
    $hasil = mysqli_query($connect,$query);
    $data = mysqli_fetch_array($hasil);
    include 'bagian/link.php';      
 ?>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="sidebar">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php?p=dashboard">Beranda</a>
                </li>
                <li>
                    <a href="index.php?p=input-data/home">Input Data</a>
                </li>
                <li>
                    <a href="index.php?p=kelola-data/home">Kelola Data</a>
                </li>
                <li>
                    <a href="index.php?p=pengaturan/home">Pengaturan</a>
                </li>
                <li>
                    <a href="pemroses/logout.php">Keluar</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

       <?php
         if(isset($_GET['p']))
         {
           $page = $_GET['p'];
         }
         else
         {
           $page = 'dashboard';
         }
         include 'halaman/'.$page.'.php';
       ?>

    </div>
    <!-- /#wrapper -->

    

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
