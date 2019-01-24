<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Aplikasi Pengarsipan Surat</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Penerusan Surat</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Form Hapus Bagian Penerusan Surat</div>
				<div class="panel-body">
					<div class="col-md-12">
						<?php 
							$id_teruskan_kepada = $_GET['id_teruskan_kepada'];
							$query = "SELECT * FROM teruskan_kepada WHERE id_teruskan_kepada=".$id_teruskan_kepada;
							$result = mysqli_query($connect,$query);
							$data = mysqli_fetch_assoc($result);
						 ?>
						<form class="form-horizontal" action="pemroses/kepada/hapus.php?id_teruskan_kepada=<?php echo $data['id_teruskan_kepada']; ?>" method="post">
							<fieldset>
								<!-- Nama Tipe Surat-->
								<div class="form-group">
									<label class="col-md-4 control-label" for="name">Penerusan Surat</label>
									<div class="col-md-8">
										<input type="text" class="form-control" value="<?php echo $data['bagian_teruskan_kepada']; ?>" readonly>
									</div>
								</div>

								<!-- Tombol -->
								<div class="form-group">
									<div class="col-md-8 col-md-offset-1 pull-right">
										<button type="submit" class="btn btn-danger btn-md">Hapus</button>
										<a href="index.php?p=kepada/home" class="btn btn-warning btn-md">Kembali</a>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>