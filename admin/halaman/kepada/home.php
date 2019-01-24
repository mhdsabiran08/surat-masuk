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
			<div class="col-md-12">
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">Tabel Bagian Penerusan Surat</div>
						<div class="panel-body">
							<div class="col-md-12">
								<table class="table">
									<thead>
										<tr class="headings">
											<th width="1%">No</th>
											<th width="70%">Bagian Penerusan Surat</th>
											<th width="30%">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											$query = "SELECT * FROM teruskan_kepada ORDER BY id_teruskan_kepada ASC";
											$result = mysqli_query($connect,$query);
											$no = 0;
											while ($data = mysqli_fetch_assoc($result)) {
												$no++;
										 ?>
										<tr class="even-pointer">
											<td><?php echo $no; ?></td>
											<td><?php echo $data['bagian_teruskan_kepada']; ?></td>
											<td>
												<a href="index.php?p=kepada/edit&id_teruskan_kepada=<?php echo $data['id_teruskan_kepada']; ?>" class="btn btn-primary btn-sm">Edit</a>
												<a href="index.php?p=kepada/hapus&id_teruskan_kepada=<?php echo $data['id_teruskan_kepada']; ?>" class="btn btn-danger btn-sm">Hapus</a>
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
						<div class="panel-heading">Form Tambah Bagian Penerusan Surat</div>
						<div class="panel-body">
							<div class="col-md-12">
								<form class="form-horizontal" action="pemroses/kepada/tambah.php" method="post">
									<fieldset>
										<!-- Nama Tipe Surat-->
										<div class="form-group">
											<label class="col-md-5 control-label" for="name">Bagian Penerusan Surat</label>
											<div class="col-md-7">
												<input id="name" name="bagian_teruskan_kepada" type="text" placeholder="bagian penerusan surat" class="form-control" required>
											</div>
										</div>

										<!-- Tombol -->
										<div class="form-group">
											<div class="col-md-7 col-md-offset-1 pull-right">
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