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
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Tabel Operator</div>
					<div class="panel-body">
						<div class="col-md-10 col-md-offset-1">
							<div class="row">
								<table class="table">
								    <thead>
								    	<tr class="headings">
								    		<th width="3%">No</th>
								    		<th width="35%">Nama Lengkap Operator</th>
								    		<th width="35%">Username Operator</th>
								    		<th width="20%">Aksi</th>
								    	</tr>
								    </thead>
								    <tbody>
								    	<?php 
								    		$query = "SELECT * FROM operator";
								    		$result = mysqli_query($connect,$query);
								    		$no = 0;
								    		while ($data = mysqli_fetch_assoc($result)) {
								    			$no++;
								    	 ?>
								    	<tr class="even pointer">
								    		<td><?php echo $no; ?></td>
								    		<td><?php echo $data['nama_operator']; ?></td>
								    		<td><?php echo $data['usnam_operator']; ?></td>
								    		<td>
								    			<a href="index.php?p=pengguna/edit-operator&id_operator=<?php echo $data['id_operator']; ?>" class="btn btn-primary btn-sm"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
								    			<a href="index.php?p=pengguna/hapus-operator&id_operator=<?php echo $data['id_operator']; ?>" class="btn btn-danger btn-sm"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</a>
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
	</div>					
					
</div>

