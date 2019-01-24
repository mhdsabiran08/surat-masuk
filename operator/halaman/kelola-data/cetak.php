				<!-- Page Content -->
	                <?php
	                	ob_start();
	                	require_once '../../pemroses/koneksi.php'; 
	                	require_once '../../bagian/TglWkt-id.php';
	                	require_once '../../bagian/lang-id.php';
	                	require_once '../../../print/tcpdf.php';
	                	$pdf = new tcpdf();
	                	 
	                	// remove default header/footer
	                	$pdf->setPrintHeader(false);
	                	$pdf->setPrintFooter(false);

	                	//set margins
	                	$pdf->SetMargins(5, 10, 5);
	                	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	                	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

	                	$orientation = 'P';
	                	$format = 'A5'; //ukuran kertas
	                	$keepmargins = false;
	                	$tocpage = false;

	                	for($no=1;$no<4;$no++){

	                	$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);	
	                	$pdf->SetFont('helvetica', '', 9);

	                 	$id_surat = $_GET['id_surat'];
	                	$query = "SELECT * FROM surat INNER JOIN kategori_surat ON kategori_surat.id_kategori_surat = surat.id_kategori_surat INNER JOIN teruskan_kepada ON teruskan_kepada.id_teruskan_kepada = surat.id_teruskan_kepada WHERE id_surat=".$id_surat;
	                	$result = mysqli_query($connect,$query);
	                	$data = mysqli_fetch_array($result);

	                	$instansi = $data['instansi'];
	                	$nomor_surat = $data['nomor_surat'];
	                	$tanggal_diterima = indonesian_date($data['tanggal_diterima']);
	                	$tanggal_diterbitkan = TanggalIndo($data['tanggal_diterbitkan']);
	                	$nomor_agenda = $data['nomor_agenda'];
	                	$sifat_surat = $data['sifat_surat'];
	                	$perihal = $data['perihal'];
	                	$bagian_teruskan_kepada = $data['bagian_teruskan_kepada'];
	                	$catatan = $data['catatan'];
	                	$isi = '
		                		<p>Lembar '.$no.'</p>
		                		<p align="center"><strong>PEMERINTAH KABUPATEN KUBU RAYA</strong></p>
		                		<p align="center">Jalan Supadio Telp. (0561
		                		<p align="center"><strong>SEKRETARIAT DAERAH</strong></p>) 722744</p>
		                		<hr height="3">
		                		<div></div>
		                		<table border="1" bordercolor="black" cellspacing="0" cellpadding="3">
		                			<thead>
			                			<tr>
			                				<td colspan="2" align="center"><strong style="font-size:9px">LEMBAR DISPOSISI</strong></td>
			                			</tr>
		                			</thead>
		                			<tbody>
			                			<tr>
			                				<td width="50%" height="80">
			                					Surat dari : '.$instansi.' <br>
			                					No. Surat : '.$nomor_surat.' <br>
			                					Tgl. Surat : '.$tanggal_diterbitkan.'
			                				</td>
			                				<td width="50%" height="80">
			                					Diterima Tgl : '.$tanggal_diterima.' <br>
			                					No. Agenda : '.$nomor_agenda.' <br>
			                					Sifat : '.$sifat_surat.'
			                				</td>
			                			</tr>
			                			<tr>
			                				<td colspan="2" height="80">Perihal : '.$perihal.'</td>
			                			</tr>
			                			<tr>
			                				<td height="80" width="50%">
			                					Diteruskan Kepada Sdr. <br>
			                					'.$bagian_teruskan_kepada.'
			                				</td>
			                				<td height="80" width="50%">
			                					Dengan hormat harap
			                				</td>
			                			</tr>
			                			<tr>
			                				<td colspan="2" height="138">Catatan : '.$catatan.'</td>
			                			</tr>
		                			</tbody>
		                		</table>
	                	';
	                	$pdf->writeHTML($isi, true, false, false, false, '');
	                	}
	                	$pdf->Output(); 

	                	?> 
