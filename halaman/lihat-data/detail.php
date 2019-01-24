<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<div class="container">
	<?php
		require_once 'pemroses/koneksi.php'; 
		require_once 'bagian/TglWkt-id.php';
		require_once 'bagian/lang-id.php';
		$id_surat = $_GET['id_surat'];
		$query = "SELECT * FROM surat INNER JOIN kategori_surat ON kategori_surat.id_kategori_surat = surat.id_kategori_surat INNER JOIN teruskan_kepada ON teruskan_kepada.id_teruskan_kepada = surat.id_teruskan_kepada WHERE id_surat=".$id_surat;
		$result = mysqli_query($connect,$query);
		$data = mysqli_fetch_assoc($result);
	 ?>
	<h1>Data Surat Masuk</h1> 
	<hr>
	<form class="form-horizontal col-md-10 col-md-offset-1">
		<!-- <div class="form-group">
			<div class="col-md-12">
				<h2 align="center">Operator : <?php echo $data['operator_input']; ?></h2>
			</div>
		</div> -->
		<div class="form-group">
			<label class="control-label col-md-3" >Nomor Surat</label>
			<div class="col-md-7">
				<input type="text" class="form-control" value="<?php echo $data['nomor_surat']; ?>" readonly>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" >Perihal</label>
			<div class="col-md-7">
				<textarea class="form-control" readonly cols="30" rows="2"><?php echo $data['perihal']; ?></textarea>
			</div>
		</div>	
		<div class="form-group">
			<label class="control-label col-md-3" >Instansi</label>
			<div class="col-md-7">
				<input type="text" class="form-control" value="<?php echo $data['instansi']; ?>" readonly>
			</div>
		</div>	
		<div class="form-group">
			<label class="control-label col-md-3" >Tanggal Diterbitkan</label>
			<div class="col-md-4">
				<input type="text" class="form-control" value="<?php echo TanggalIndo($data['tanggal_diterbitkan']); ?>" readonly>
			</div>
		</div>	
		<div class="form-group">
			<label class="control-label col-md-3" >Tanggal Diterima</label>
			<div class="col-md-4">
				<input type="text" class="form-control" value="<?php echo indonesian_date($data['tanggal_diterima']); ?>" readonly>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" >Nomor Agenda</label>
			<div class="col-md-7">
				<input type="text" class="form-control" value="<?php echo $data['nomor_agenda']; ?>" readonly>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" >Kategori Surat</label>
			<div class="col-md-4">
				<input type="text" class="form-control" value="<?php echo $data['nama_kategori_surat']; ?>" readonly>
			</div>
		</div>	
		<div class="form-group">
			<label class="control-label col-md-3" >Teruskan Kepada</label>
			<div class="col-md-4">
				<input type="text" class="form-control" value="<?php echo $data['bagian_teruskan_kepada']; ?>" readonly>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3" >Sifat Surat</label>
			<div class="col-md-4">
				<input type="text" class="form-control" value="<?php echo $data['sifat_surat']; ?>" readonly>
			</div>
		</div>	
		<div class="form-group">
			<label class="control-label col-md-3" >Catatan</label>
			<div class="col-md-7">
				<textarea class="form-control" readonly cols="30" rows="3"><?php echo $data['catatan']; ?></textarea>
			</div>
		</div>	
		<div class="form-group">
			<label class="control-label col-md-3" >Foto Surat</label>
			<div class="col-md-4" style="max-width: 300px; max-height: 300px;">
				<?php 
					if ($data['foto_surat'] != "")
					{
					    ?>
					    <!-- Trigger the Modal -->
					    <img id="myImg" src="admin/image/storage/<?php echo $data['foto_surat']; ?>" class="img-thumbnail" alt="">
					    <!-- The Modal -->
					    <div id="myModal" class="modal">

						    <!-- The Close Button -->
						    <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

						    <!-- Modal Content (The Image) -->
						    <img class="modal-content" id="img01">

						    <!-- Modal Caption (Image Text) -->
						    <div id="caption"></div>
					    </div>
					    <?php
					}
					else
					{
					    ?>
					    <img src="img/holder-image.png" class="img-thumbnail" alt="">
					    <?php
					}
				 ?> 
			</div>
		</div>	
		<div class="pull-right" style="margin-bottom : 50px;">
			<a href="index.php?p=lihat-data/home" class="btn btn-warning">Kembali</a>
		</div>	
	</form>	
</div>

<!-- Fungsi Javascript untuk memperbesar/zoom-in Gambar -->
<script>
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var img = document.getElementById('myImg');
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");
	img.onclick = function(){
	    modal.style.display = "block";
	    modalImg.src = this.src;
	    modalImg.alt = this.alt;
	    captionText.innerHTML = this.alt;
	}

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() { 
	  modal.style.display = "none";
	}
</script>


