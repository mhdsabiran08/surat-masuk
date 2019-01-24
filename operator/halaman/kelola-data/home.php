<script type="text/javascript">
    $(function() {
        $('#tabelKelolaData').dataTable();
    });
</script>

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1>Kelola Data Surat Masuk</h1>
                <hr>
                <table class="table" id="tabelKelolaData">
                	<thead>
                		<tr class="headings">
                			<th width="1%">No</th>
                			<th width="35%">Nomor Surat dan Perihal</th>
                			<th width="20%">Instansi</th>
                			<th width="30%">Tanggal Diterima</th>
                			<th width="14%%">Aksi</th>
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
                				<a href="javascript:void(0);" class="btn btn-default btn-sm" onclick="window.open('halaman/kelola-data/cetak.php?id_surat=<?php echo $data['id_surat']; ?>','nama_window_pop_up','size=1000,height=1000,scrollbars=yes,resizeable=no')"> <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Cetak</a>
                				<a href="index.php?p=kelola-data/edit&id_surat=<?php echo $data['id_surat']; ?>" class="btn btn-primary btn-sm">Edit</a>
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
<!-- /#page-content-wrapper -->