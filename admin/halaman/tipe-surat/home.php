	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Aplikasi Pengarsipan Surat</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Kategori Surat Masuk</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">Tabel Kategori Surat Masuk</div>
						<div class="panel-body">
							<div class="col-md-12">
								<table class="table">
									<thead>
										<tr class="headings">
											<th width="1%">No</th>
											<th width="70%">Kategori Surat Masuk</th>
											<th width="30%">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											$query = "SELECT * FROM kategori_surat ORDER BY nama_kategori_surat ASC";
											$result = mysqli_query($connect,$query);
											$no = 0;
											while ($data = mysqli_fetch_assoc($result)) {
												$no++;
										 ?>
										<tr class="even-pointer">
											<td><?php echo $no; ?></td>
											<td><?php echo $data['nama_kategori_surat']; ?></td>
											<td>
												<a href="index.php?p=tipe-surat/edit&id_kategori_surat=<?php echo $data['id_kategori_surat']; ?>" class="btn btn-primary btn-sm">Edit</a>
												<a href="index.php?p=tipe-surat/hapus&id_kategori_surat=<?php echo $data['id_kategori_surat']; ?>" class="btn btn-danger btn-sm">Hapus</a>
											</td>
										</tr>
										<?php 
											}
										 ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">Form Tambah Kategori Surat Masuk</div>
						<div class="panel-body">
							<div class="col-md-12">
								<form class="form-horizontal" action="pemroses/tipe-surat/tambah.php" method="post">
									<fieldset>
										<!-- Nama Tipe Surat-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="name">Kategori Surat</label>
											<div class="col-md-8">
												<input id="name" name="nama_kategori_surat" type="text" placeholder="kategori surat masuk" class="form-control" required>
											</div>
										</div>

										<!-- Tombol -->
										<div class="form-group">
											<div class="col-md-8 col-md-offset-1 pull-right">
												<button type="submit" class="btn btn-success btn-md">Tambah</button>
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

	</div>