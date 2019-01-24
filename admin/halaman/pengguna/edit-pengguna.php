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
						$id_admin = $_GET['id_admin'];
						$query = "SELECT * FROM admin WHERE id_admin=".$id_admin;
						$result = mysqli_query($connect,$query);
						$data = mysqli_fetch_assoc($result);
					    if (isset($_GET['error'])){
					    	$error = $_GET['error'];
					    	$id_admin =  $_GET['id_admin'];
					    ?>
						    <div class="alert alert-warning" role="alert">
						        <a href="#" class="alert-link">Password konfirmasi yang Anda masukkan tidak sama, silahkan coba lagi!</a>
						    </div>
					    <?php
					    }
					    else
					    {
					     	$error="";
					     	$id_admin =  $data['id_admin'];   
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
					        $nama_lengkap=$data['nama_lengkap'];
					        $username=$data['username'];
					        $old_password=$data['password'];
					    }
					?>
					<div class="panel-heading">Form Edit Pengguna</div>
					<div class="panel-body">
						<div class="col-md-12">
							<form class="form-horizontal" action="pemroses/pengguna/edit.php?id_admin=<?php echo $data['id_admin']; ?>" method="post">
								<input type="hidden" class="form-control" name="old_password" value="<?php echo $old_password; ?>">
								<input type="hidden" class="form-control" name="id_admin" value="<?php echo $id_admin; ?>">
								<fieldset>
									<!-- Nama Lengkap-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="name"> Nama Lengkap </label>
										<div class="col-md-8">
											<input id="name" name="nama_lengkap" type="text" placeholder="nama lengkap" class="form-control" value="<?php echo $nama_lengkap; ?>" required>
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
											<input id="name" name="password" type="password" placeholder="isi jika ingin mengubah password" class="form-control" required>
										</div>
									</div>

									<!-- Konfirmasi Password-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="name"> Konfirmasi Password </label>
										<div class="col-md-8">
											<input id="name" name="password2" type="password" placeholder="konfirmasi perubahan password" class="form-control" required>
										</div>
									</div>

									<!-- Tombol -->
									<div class="form-group">
										<div class="col-md-4 col-md-offset-6 pull-right">
											<button type="submit" class="btn btn-primary btn-md">Ubah</button>
											<a href="index.php?p=pengguna/lihat-pengguna" class="btn btn-warning btn-md">Kembali</a>
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
	