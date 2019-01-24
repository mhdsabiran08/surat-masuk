	<!-- Page Content -->
	<div id="page-content-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1>Form Input Data Surat Masuk</h1> 
	                <hr>
	                <form class="form-horizontal col-md-10 col-md-offset-1" action="pemroses/tambah.php" method="post" enctype="multipart/form-data">
	                <?php 
	                	$id_operator = $_SESSION['id_operator'];
	                	$sql = "SELECT * FROM operator WHERE id_operator='$id_operator'";
	                	$query = mysqli_query($connect,$sql);
	                	$data = mysqli_fetch_array($query);
	                 ?>
	                	<input type="hidden" value="<?php echo $data['nama_operator'] ?>" name="operator_input">
	                	<div class="form-group">
	                		<label class="control-label col-md-3">Nomor Surat</label>
	                		<div class="col-md-8">
	                			<input type="text" class="form-control" placeholder="nomor surat" name="nomor_surat" required>
	                		</div>
	                	</div>
	                	<div class="form-group">
	                		<label class="control-label col-md-3" >Perihal</label>
	                		<div class="col-md-8">
	                			<textarea class="form-control" name="perihal" cols="30" rows="2" placeholder="perihal" required></textarea>
	                		</div>
	                	</div>	
	                	<div class="form-group">
	                		<label class="control-label col-md-3" >Instansi</label>
	                		<div class="col-md-8">
	                			<input type="text" class="form-control" placeholder="instansi" name="instansi" required>
	                		</div>
	                	</div>	
	                	<div class="form-group">
	                		<label class="control-label col-md-3" >Tanggal Diterbitkan</label>
	                		<div class="col-md-4">
	                			<input type="text" class="form-control" name="tanggal_diterbitkan" id="datepicker" placeholder="mm/dd/yyyy" required>
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
	                		<label class="control-label col-md-3" >Tanggal Diterima</label>
	                		<div class="col-md-4">
	                			<input type="text" class="form-control" name="tanggal_diterima" id="datetimepicker" placeholder="mm/dd/yyyy hh:mm:ss" required>
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
	                		<div class="col-md-8">
	                			<input type="text" class="form-control" placeholder="nomor agenda" name="nomor_agenda" required>
	                		</div>
	                	</div>
	                	<div class="form-group">
	                		<label class="control-label col-md-3" >Kategori Surat</label>
	                		<div class="col-md-4">
	                			<select class="form-control" name="id_kategori_surat" id="name" required>
	                				<option value="">--Pilih--</option>
	                				<?php 
	                					require_once 'pemroses/koneksi.php';
	                					$query = "SELECT * FROM kategori_surat";
	                					$result = mysqli_query($connect,$query);
	                					while ($data = mysqli_fetch_assoc($result)) {
	                				 ?>
	                					<option value="<?php echo $data['id_kategori_surat']; ?>"><?php echo $data['nama_kategori_surat']; ?></option>
	                				<?php 
	                					}
	                				 ?>
	                			</select>
	                		</div>
	                	</div>	
	                	<div class="form-group">
	                		<label class="control-label col-md-3" >Teruskan Kepada</label>
	                		<div class="col-md-4">
	                			<select class="form-control" name="id_teruskan_kepada" id="name" required>
	                				<option value="">--Pilih--</option>
	                				<?php 
	                					require_once 'pemroses/koneksi.php';
	                					$query = "SELECT * FROM teruskan_kepada";
	                					$result = mysqli_query($connect,$query);
	                					while ($data = mysqli_fetch_assoc($result)) {
	                				 ?>
	                					<option value="<?php echo $data['id_teruskan_kepada']; ?>"><?php echo $data['bagian_teruskan_kepada']; ?></option>
	                				<?php 
	                					}
	                				 ?>
	                			</select>
	                		</div>
	                	</div>
	                	<div class="form-group">
	                		<label class="control-label col-md-3" >Sifat Surat</label>
	                		<div class="col-md-4">
	                			<select class="form-control" name="sifat_surat" id="name" required>
	                				<option value="">--Pilih--</option>
	                				<option value="Penting">Penting</option>
	                				<option value="Segera">Segera</option>
	                				<option value="Sangat Segera">Sangat Segera</option>
	                				<option value="Biasa">Biasa</option>
	                				<option value="Rahasia">Rahasia</option>
	                			</select>
	                		</div>
	                	</div>
	                	<div class="form-group">
	                		<label class="control-label col-md-3" >Catatan</label>
	                		<div class="col-md-8">
	                			<textarea class="form-control" name="catatan" cols="30" rows="4" placeholder="catatan" required></textarea>
	                		</div>
	                	</div>	
	                	<div class="form-group">
	                		<label class="control-label col-md-3" >Foto Surat</label>
	                		<div class="col-md-3">
	                			<input type="file" class="btn btn-default" name="foto_surat" required>
	                		</div>
	                	</div>		
	                	<div class="pull-right" style="margin-bottom : 50px;">
	                		<button type="submit" class="btn btn-success">Simpan</button>
	                	</div>	
	                </form>	
	            </div>
	        </div>
	    </div>
	</div>
	<!-- /#page-content-wrapper -->

