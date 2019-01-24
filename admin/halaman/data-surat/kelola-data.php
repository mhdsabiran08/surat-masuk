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
				<div class="panel-heading">Tabel Data Surat</div>
					<div class="panel-body">
						<div class="col-md-12">
							<div class="row">
								<table class="table" id="tabelKelolaData">
								    <thead>
								    	<tr class="headings">
								    		<th width="1%">No</th>
								    		<th width="30%">Nomor Surat Dan Perihal</th>
								    		<th width="20%">Instansi</th>
								    		<th width="20%">Tanggal Diterima</th>
								    		<th width="15%%">Aksi</th>
								    	</tr>
								    </thead>
								    <tbody>
								    	<?php 
											require_once 'bagian/TglWkt-id.php';
								    		$query = "SELECT * FROM surat ORDER BY id_surat DESC";
								    		$result = mysqli_query($connect,$query);
								    		$no = 0;
								    		while ($data = mysqli_fetch_assoc($result)) {
								    			$no++;
								    	 ?>
								    	<tr class="even pointer">
								    		<td><?php echo $no; ?></td>
								    		<td>
								    			Nomor Surat : <?php echo $data['nomor_surat']; ?><br>
								    			Perihal 	: <?php echo $data['perihal']; ?>
								    		</td>
								    		<td><?php echo $data['instansi']; ?></td>
								    		<td><?php echo indonesian_date($data['tanggal_diterima']); ?></td>
								    		<td>
								    			<a href="index.php?p=data-surat/edit&id_surat=<?php echo $data['id_surat']; ?>" class="btn btn-primary btn-sm"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
								    			<a href="index.php?p=data-surat/hapus&id_surat=<?php echo $data['id_surat']; ?>" class="btn btn-danger btn-sm"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</a>
								    		</td>
								    	</tr>
								    	<?php 
								    		}
								    	 ?>
								    </tbody>
								</table>
							</div><!--/.row-->	
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		<script src="assets/js/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/js/datatables/dataTables.bootstrap.js"></script>
		<script type="text/javascript">
		    $(function() {
		        $('#tabelKelolaData').dataTable();
		    });
		</script>
	</div>					
					
</div>

