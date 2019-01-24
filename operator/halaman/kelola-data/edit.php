	<!-- Page Content -->
	<div id="page-content-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <?php
	                	require_once 'pemroses/koneksi.php'; 
	                	$id_surat = $_GET['id_surat'];
	                	$query = "SELECT * FROM surat INNER JOIN kategori_surat ON kategori_surat.id_kategori_surat = surat.id_kategori_surat INNER JOIN teruskan_kepada ON teruskan_kepada.id_teruskan_kepada = surat.id_teruskan_kepada WHERE id_surat=".$id_surat;
	                	$result = mysqli_query($connect,$query);
	                	$data = mysqli_fetch_array($result);
	                 ?>
	                <h1>Data Surat Masuk</h1> 
	                <hr>
	                <form class="form-horizontal col-md-10 col-md-offset-1" action="pemroses/edit.php?id_surat=<?php echo $data['id_surat']; ?>" method="post" enctype="multipart/form-data">
	                	<input type="hidden" name="old_foto_surat" value="<?php echo $data['foto_surat']; ?>"></input>
	                	<div class="form-group">
	                		<label class="control-label col-md-3">Nomor Surat</label>
	                		<div class="col-md-7">
	                			<input type="text" class="form-control" value="<?php echo $data['nomor_surat']; ?>" name="nomor_surat" required>
	                		</div>
	                	</div>
	                	<div class="form-group">
	                		<label class="control-label col-md-3">Perihal</label>
	                		<div class="col-md-7">
	                			<textarea class="form-control" name="perihal" required><?php echo $data['perihal']; ?></textarea>
	                		</div>
	                	</div>	
	                	<div class="form-group">
	                		<label class="control-label col-md-3">Instansi</label>
	                		<div class="col-md-7">
	                			<input type="text" class="form-control" value="<?php echo $data['instansi']; ?>" name="instansi" required>
	                		</div>
	                	</div>	
	                	<div class="form-group">
	                		<label class="control-label col-md-3">Tanggal Diterbitkan</label>
	                		<div class="col-md-4">
	                			<input type="text" class="form-control" value="<?php echo date('m/d/Y', strtotime($data['tanggal_diterbitkan'])); ?>" id="datepicker" name="tanggal_diterbitkan" required>
	                			<script type="text/javascript">
	                			    $(function () {
	                			        $('#datepicker').datetimepicker({
	                			        	format: 'MM/DD/YYYY'
	                			        });
	                			    });
	                			</script>
	                		</div>
	                	</div>	
	                	<div class="form-group">
	                		<label class="control-label col-md-3">Tanggal Diterima</label>
	                		<div class="col-md-4">
	                			<input type="text" class="form-control" value="<?php echo date('m/d/Y h:i:s', strtotime($data['tanggal_diterima'])); ?>" name="tanggal_diterima" id="datetimepicker" required>
	                			<script type="text/javascript">
	                			    $(function () {
	                			        $('#datetimepicker').datetimepicker({
	                			        	format: 'MM/DD/YYYY HH:mm:ss'
	                			        });
	                			    });
	                			</script>
	                		</div>
	                	</div>
	                	<div class="form-group">
	                		<label class="control-label col-md-3">Nomor Agenda</label>
	                		<div class="col-md-7">
	                			<input type="text" class="form-control" value="<?php echo $data['nomor_agenda']; ?>" name="nomor_agenda" required>
	                		</div>
	                	</div>
	                	<div class="form-group">
	                		<label class="control-label col-md-3">Kategori Surat</label>
	                		<div class="col-md-4">
	                			<select name="id_kategori_surat" id="name" class="form-control">
	                				<option value="<?php echo $data['id_kategori_surat']; ?>"><?php echo $data['nama_kategori_surat']; ?></option>
	                				<?php 
	                					$query2 = "SELECT * FROM kategori_surat ORDER BY nama_kategori_surat";
	                					$result2 = mysqli_query($connect,$query2);
	                					while ($data2 = mysqli_fetch_assoc($result2)) 
	                					{	
	                				 ?>
	                				<option value="<?php echo $data2['id_kategori_surat']; ?>"><?php echo $data2['nama_kategori_surat']; ?></option>
	                				 <?php 
	                				}
	                				  ?>
	                			</select>
	                		</div>
	                	</div>	
	                	<div class="form-group">
	                		<label class="control-label col-md-3">Teruskan Kepada</label>
	                		<div class="col-md-4">
	                			<select name="id_teruskan_kepada" id="name" class="form-control">
	                				<option value="<?php echo $data['id_teruskan_kepada']; ?>"><?php echo $data['bagian_teruskan_kepada']; ?></option>
	                				<?php 
	                					$query3 = "SELECT * FROM teruskan_kepada ORDER BY bagian_teruskan_kepada";
	                					$result3 = mysqli_query($connect,$query3);
	                					while ($data3 = mysqli_fetch_assoc($result3))
	                					{	
	                				 ?>
	                				<option value="<?php echo $data3['id_teruskan_kepada']; ?>"><?php echo $data3['bagian_teruskan_kepada']; ?></option>
	                				 <?php 
	                				}
	                				  ?>
	                			</select>
	                		</div>
	                	</div>
	                	<div class="form-group">
	                		<label class="control-label col-md-3">Sifat Surat</label>
	                		<div class="col-md-4">
	                			<select name="sifat_surat" id="name" class="form-control">
	                				<option value="<?php echo $data['sifat_surat']; ?>"><?php echo $data['sifat_surat']; ?></option>
	                				<option value="Penting">Penting</option>
	                				<option value="Segera">Segera</option>
	                				<option value="Sangat Segera">Sangat Segera</option>
	                				<option value="Biasa">Biasa</option>
	                				<option value="Rahasia">Rahasia</option>
	                			</select>
	                		</div>
	                	</div>	
	                	<div class="form-group">
	                		<label class="control-label col-md-3">Catatan</label>
	                		<div class="col-md-7">
	                			<textarea class="form-control" name="catatan" cols="30" rows="3" required><?php echo $data['catatan']; ?></textarea>
	                		</div>
	                	</div>	
	                	<div class="form-group">
	                		<label class="control-label col-md-3">Foto Surat</label>
	                		<div class="col-md-4">
	                			<input type="file" class="btn btn-default" id="exampleInputFile1" name="foto_surat" accept="image/*">
	                			<p>*pilih jika ingin mengubah foto</p>
	                		</div>
	                	</div>	
	                	<div class="pull-right" style="margin-bottom : 50px;">
	                		<button type="submit" class="btn btn-primary">Edit</button>
	                		<a href="index.php?p=kelola-data/home" class="btn btn-warning">Kembali</a>
	                	</div>	
	                </form>	
	            </div>
	        </div>
	    </div>
	</div>
	<!-- /#page-content-wrapper -->

