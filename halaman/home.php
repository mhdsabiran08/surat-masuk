	<!-- Page Content -->
	<div class="container">

		<div class="row" style="margin-top: 10px">
			<div class="col-md-7">
				<h1>Selamat Datang.</h1>
				<h2>Di Aplikasi Pengarsipan Surat Masuk</h2>
				<h2>Sekretariat Daerah Kabupaten Kubu Raya</h2>
			</div>
			<div class="col-md-5">
				<div class="jumbotron">
					<img src="img/surat-3.png" class="img-responsive center-block logo" style="margin-bottom: 10px; max-width: 400px; max-height: 400px;">
					<h2 align="center">Jumlah Surat Masuk</h2>
					<div class="row">
						<?php 
							require_once 'pemroses/koneksi.php';
							$query=mysqli_query($connect,"SELECT count(*) AS count FROM surat");
							$count=mysqli_fetch_assoc($query);
							$result=$count['count'];
						 ?>
						<h1 align="center"><span class="counter"><?php echo $result; ?></span></h1>
					</div>
				</div>
			</div>
		</div>

	    <hr>

	    <!-- Footer -->
	    <footer>
	        <div class="row">
	            <div class="col-lg-12">
	                <p>Copyright &copy; 2016 <a href="https://www.linkedin.com/in/muhammad-sabiran-004983166/" target="_blank">Muhammad Sabiran</a></p>
	            </div>
	        </div>
	    </footer>

	</div>
	<!-- /.container -->

	<!-- Counter -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script>
	  jQuery(document).ready(function( $ ) {
	      $('.counter').counterUp({
	          delay: 10,
	          time: 5000
	      });
	  });
	</script>