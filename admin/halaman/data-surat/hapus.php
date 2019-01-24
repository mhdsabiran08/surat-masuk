<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Aplikasi Pengarsipan Surat</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Surat Masuk</h1>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Detail Data Surat Masuk</div>
					<div class="panel-body">
						<div class="col-md-12">
							<div class="row">
								<?php
									require_once 'pemroses/koneksi.php'; 
									require_once 'bagian/TglWkt-id.php';
									require_once 'bagian/lang-id.php';
									$id_surat = $_GET['id_surat'];
									$query = "SELECT * FROM surat INNER JOIN kategori_surat ON kategori_surat.id_kategori_surat = surat.id_kategori_surat INNER JOIN teruskan_kepada ON teruskan_kepada.id_teruskan_kepada = surat.id_teruskan_kepada WHERE id_surat=".$id_surat;
									$result = mysqli_query($connect,$query);
									$data = mysqli_fetch_assoc($result);
								 ?>
								<form class="form-horizontal col-md-10 col-md-offset-1" action="pemroses/data-surat/hapus.php?id_surat=<?php echo $data['id_surat']; ?>" method="post" enctype="multipart/form-data">
									<input type="hidden" name="foto_surat" value="<?php echo $data['foto_surat']; ?>">
									<div class="form-group">
										<label class="control-label col-md-3" for="nama">Nomor Surat</label>
										<div class="col-md-7">
											<input type="text" class="form-control" value="<?php echo $data['nomor_surat']; ?>" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="alamat">Perihal</label>
										<div class="col-md-7">
											<textarea class="form-control" readonly><?php echo $data['perihal']; ?></textarea>
										</div>
									</div>	
									<div class="form-group">
										<label class="control-label col-md-3" for="alamat">Instansi</label>
										<div class="col-md-7">
											<input type="text" class="form-control" value="<?php echo $data['instansi']; ?>" readonly>
										</div>
									</div>	
									<div class="form-group">
										<label class="control-label col-md-3" for="alamat">Tanggal Diterbitkan</label>
										<div class="col-md-4">
											<input type="text" class="form-control" value="<?php echo TanggalIndo($data['tanggal_diterbitkan']); ?>" readonly>
										</div>
									</div>	
									<div class="form-group">
										<label class="control-label col-md-3" for="alamat">Tanggal Diterima</label>
										<div class="col-md-4">
											<input type="text" class="form-control" value="<?php echo indonesian_date($data['tanggal_diterima']); ?>" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="nama">Nomor Agenda</label>
										<div class="col-md-7">
											<input type="text" class="form-control" value="<?php echo $data['nomor_agenda']; ?>" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="alamat">Kategori Surat</label>
										<div class="col-md-4">
											<input type="text" class="form-control" value="<?php echo $data['nama_kategori_surat']; ?>" readonly>
										</div>
									</div>	
									<div class="form-group">
										<label class="control-label col-md-3" for="alamat">Teruskan Kepada</label>
										<div class="col-md-4">
											<input type="text" class="form-control" value="<?php echo $data['bagian_teruskan_kepada']; ?>" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="alamat">Sifat Surat</label>
										<div class="col-md-4">
											<input type="text" class="form-control" value="<?php echo $data['sifat_surat']; ?>" readonly>
										</div>
									</div>	
									<div class="form-group">
										<label class="control-label col-md-3" for="alamat">Foto Surat</label>
										<div class="col-md-4" style="max-width: 300px; max-height: 300px;">
											<img src="image/storage/<?php echo $data['foto_surat']; ?>" class="img-thumbnail" alt=""> 
										</div>
									</div>	
									<div class="pull-right" style="margin-bottom : 50px;">
										<button type="submit" class="btn btn-danger">Hapus</button>
										<a href="index.php?p=data-surat/kelola-data" class="btn btn-warning">Kembali</a>
									</div>	
								</form>	
							</div><!--/.row-->	
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	</div>					
					
</div>




