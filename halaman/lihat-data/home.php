<script src="js/datatables/jquery.dataTables.min.js"></script>
<script src="js/datatables/dataTables.bootstrap.js"></script>
<script type="text/javascript">
    $(function() {
        $('#tabelLihatData').dataTable();
    });
</script>
<div class="container" style="margin-bottom: 50px;">
	<h1>Data Surat Masuk</h1>
	<hr>
	<table class="table" id="tabelLihatData">
		<thead>
			<tr class="headings">
				<th width="1%">No</th>
				<th width="30%">Nomor dan Perihal</th>
				<th width="20%">Instansi</th>
				<th width="20%">Tanggal Diterima</th>
				<th width="5%%">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				require_once 'pemroses/koneksi.php';
				require_once 'bagian/TglWkt-id.php';
				$query = "SELECT * FROM surat ORDER BY id_surat DESC";
				$result = mysqli_query($connect,$query);
				$no = 0;
				while ($data = mysqli_fetch_array($result)) {
					$no++;
			 ?>
			<tr class="even pointer">
				<td><?php echo $no; ?></td>
				<td>
					Nomor Surat : <?php echo $data['nomor_surat']; ?> <br>
					Perihal 	: <?php echo $data['perihal']; ?>
				</td>
				<td><?php echo $data['instansi']; ?></td>
				<td><?php echo indonesian_date($data['tanggal_diterima']); ?></td>
				<td>
					<a href="index.php?p=lihat-data/detail&id_surat=<?php echo $data['id_surat']; ?>" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Detail</a>
				</td>
				
			</tr>
			<?php 
					}
				 ?>
		</tbody>
	</table>
</div>