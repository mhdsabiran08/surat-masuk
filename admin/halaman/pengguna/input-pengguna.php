	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Aplikasi Pengarsipan Surat</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Pengguna</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
				<div class="panel panel-default">
					<?php 
					    if (isset($_GET['error']))
					    {
					        ?>
					        <div class="alert alert-warning" role="alert">
					            <a href="#" class="alert-link">Password konfirmasi yang Anda masukkan tidak sama, silahkan coba lagi!</a>
					        </div>
					        <?php
					    }
					    else
					    {
					        
					    }

					    if(isset($_GET['nama_lengkap']) AND isset($_GET['username']))
					    {
					        $nama_lengkap=$_GET['nama_lengkap'];
					        $username=$_GET['username'];
					    }
					    elseif(isset($_GET['nama_lengkap']) AND isset($_GET['username']))
					    {
					        $nama_lengkap="";
					        $username=$_GET['username'];
					    }
					    else
					    {
					        $nama_lengkap="";
					        $username="";
					    }
					?>
					<div class="panel-heading">Form Tambah Admin</div>
					<div class="panel-body">
						<div class="col-md-12">
							<form class="form-horizontal" action="pemroses/pengguna/tambah.php" method="post">
								<fieldset>
									<!-- Nama Lengkap-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="name"> Nama Lengkap </label>
										<div class="col-md-8">
											<input id="name" name="nama_lengkap" type="text" placeholder="nama lengkap" class="form-control" value="<?php echo $nama_lengkap; ?>" required="required">
										</div>
									</div>

									<!-- Username-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="name"> Username </label>
										<div class="col-md-8">
											<input id="name" name="username" type="text" placeholder="username" class="form-control" value="<?php echo $username; ?>" required="required">
										</div>
									</div>

									<!-- Password-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="name"> Password </label>
										<div class="col-md-8">
											<input id="name" name="password" type="password" placeholder="password" class="form-control" required="required">
										</div>
									</div>

									<!-- Konfirmasi Password-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="name"> Konfirmasi Password </label>
										<div class="col-md-8">
											<input id="name" name="password2" type="password" placeholder="konfirmasi password" class="form-control" required="required">
										</div>
									</div>

									<!-- Tombol -->
									<div class="form-group">
										<div class="col-md-4 col-md-offset-6 pull-right">
											<button type="submit" class="btn btn-success btn-md">Tambah</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div>
	