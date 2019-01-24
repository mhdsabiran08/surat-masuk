<?php

	require_once 'koneksi.php';

    $password_lama = md5($_REQUEST['password_lama']);
    $password_baru1 = md5($_REQUEST['password_baru1']);
    $password_baru2 = md5($_REQUEST['password_baru2']);
    $id_operator = $_REQUEST['id_operator'];

    $query = "SELECT * FROM operator WHERE id_operator = '$id_operator'";
    $hasil = mysqli_query($connect,$query);
    $data = mysqli_fetch_array($hasil);

    if ($password_lama == $data['pass_operator']) {
        if ($password_baru1!="") {
            if ($password_baru1 == $password_baru2) {
                $panjang = strlen($password_baru1);

                if ($panjang>5) {
                    $pass_operator = $password_baru1;

                    $edit= "UPDATE operator SET
                        usnam_operator='".$_POST['usnam_operator']."',
                        pass_operator='".$pass_operator."'
                        WHERE id_operator = ".$id_operator."
                    ";
                    mysqli_query($connect,$edit);

                    ?>

                    <script>
                        alert('Username/password berhasil diubah');
                        window.location='../index.php?p=pengaturan/home';
                    </script>

                    <?php
                }
                else{
                    header('location:../index.php?p=pengaturan/home&error=3');
                }
            }
            else{
                header('location:../index.php?p=pengaturan/home&error=2');
            }
        }
        else{
            $edit= "UPDATE operator SET
                usnam_operator='".$_POST['usnam_operator']."'
                WHERE id_operator = ".$id_operator."
            ";
            mysqli_query($connect,$edit);
            ?>

            <script>
                alert('Username berhasil diubah');
                window.location='../index.php?p=pengaturan/home';
            </script>

            <?php
        }
    }
    else{
        header("location:../index.php?p=pengaturan/home&error=1");
    }

?>