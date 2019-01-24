<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Admin Aplikasi Pencatatan Surat</title>
	<link rel="icon" type="image/png" href="image/logo.png">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">
	<link href="assets/css/custom.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<div class="container-fluid">
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
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div>
					<img src="image/logo.png" class="img-responsive center-block logo" style="margin-bottom: 10px; max-width: 100px; max-height: 100px;">
					<h4 align="center">Sekretariat Daerah Kabupaten Kubu Raya</h4>
				</div>
				<div class="login-panel panel panel-default">
					<div class="panel-heading" style="text-align:center;"><h5><strong>Login Administrator</strong></h5></div>
					<div class="panel-body">
						<form role="form" action="pemroses/ceklogin.php" method="post">
							<fieldset>
								<div class="form-group">
									<div class="input-group">
										<input class="form-control" placeholder="Username" name="username" type="text" required autofocus>
										<span class="input-group-btn">
											<button class="btn btn-info btn-md" id="btn-todo" disabled="disabled">U</button>
										</span>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<input class="form-control" placeholder="Password" name="password" type="password" required>
										<span class="input-group-btn">
											<button class="btn btn-info btn-md" id="btn-todo" disabled="disabled">P</button>
										</span>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2 col-md-offset-8">
										<a><button class="btn btn-md btn-primary" type="submit">Login</button></a>	
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				<div class="footer">
				    <p class="footer-copy" style="text-align:center;"><a href="../index.php">Kembali</a> | &copy; 2016 <a href="https://www.linkedin.com/in/muhammad-sabiran-004983166/" target="_blank">Muhammad Sabiran</a></p>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div>

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
