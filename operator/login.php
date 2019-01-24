<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Operator Aplikasi Pengarsipan</title>
    <link rel="icon" type="image/png" href="../admin/image/logo.png">
    <link rel="stylesheet" href='css/bootstrap.min.css'>
    <link rel="stylesheet" href="css/style.css"> 

    <script src="js/jquery.js"></script> 
    <script src="js/bootstrap.min.js"></script> 
  </head>

  <body>
    <div class="wrapper">
      <?php 
            if (isset($_GET['error']))
            {
                ?>
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <div class="alert alert-dismissable alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Login gagal!</strong> Periksa kembali username dan password. 
                        </div>
                    </div>                
                </div>
                <?php
            }
            else
            {
                
            }
        ?>
        <div class="col-lg-4 col-lg-offset-4">
            <img src="../admin/image/logo.png" class="img-responsive center-block logo" style="margin-bottom: 10px; max-width: 100px; max-height: 100px;">
            <h4 align="center">Sekretariat Daerah Kabupaten Kubu Raya</h4>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
               <form class="form-signin" action="pemroses/ceklogin.php" method="post">       
                   <h2 class="form-signin-heading" align="center">Login Operator</h2>
                   <input type="text" class="form-control" name="usnam_operator" placeholder="Username" required="" autofocus="" />
                   <input type="password" class="form-control" name="pass_operator" placeholder="Password" required=""/>
                   <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button> 
                   <p align="center" style="margin-top: 10px"><a href="../index.php">Kembali</a></p>  
               </form> 
            </div>
        </div>
    </div>
  </body>
</html>
