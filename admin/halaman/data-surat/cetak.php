			<!-- Page Content -->
                <?php
                	ob_start();
                	require_once '../../pemroses/koneksi.php'; 
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
                	$format = 'A4';
                	$keepmargins = false;
                	$tocpage = false;

                	$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);	
                	$pdf->SetFont('helvetica', '', 9);

                 	$id_surat = $_GET['id_surat'];
                	$query = "SELECT * FROM surat WHERE id_surat='$id_surat' ORDER BY foto_surat";
                	$result = mysqli_query($connect,$query);
                	$data = mysqli_fetch_array($result);

           			$foto_surat = $data['foto_surat'];
                	$isi = '
                		<img src="../../image/storage/'.$foto_surat.'" alt="" max-width="595" max-height="842">
                	';
                	$pdf->writeHTML($isi, true, false, false, false, '');
                	$pdf->Output(); 

                	?> 
