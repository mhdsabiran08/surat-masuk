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
				?>
				<div class="panel-heading">Form Hapus Pengguna</div>
				<div class="panel-body">
					<div class="col-md-12">
						<form class="form-horizontal" action="pemroses/pengguna/hapus.php?id_admin=<?php echo $data['id_admin']; ?>" method="post">
							<fieldset>
								<!-- Nama Lengkap-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name"> Nama Lengkap </label>
									<div class="col-md-8">
										<input type="text" class="form-control" value="<?php echo $data['nama_lengkap']; ?>" readonly>
									</div>
								</div>

								<!-- Username-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name"> Username </label>
									<div class="col-md-8">
										<input type="text" class="form-control" value="<?php echo $data['username']; ?>" readonly>
									</div>
								</div>

								<!-- Tombol -->
								<div class="form-group">
									<div class="col-md-4 col-md-offset-6 pull-right">
										<button type="submit" class="btn btn-danger btn-md">Hapus</button>
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
