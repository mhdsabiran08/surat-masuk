
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php?p=dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Aplikasi Pengarsipan Surat</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Beranda</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-6">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<?php
								$query="SELECT count(*) AS count FROM operator";
							    $result=mysqli_query($connect,$query);
							    $count=mysqli_fetch_assoc($result);
							    $pengguna=$count['count'];
							?>
							<div class="large"><h2>Operator : <?php echo $pengguna; ?></h2></div>
							<div class="text-muted"><a href="index.php?p=pengguna/lihat-operator" class="btn btn-info btn-sm">lihat data</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-6">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked email"><use xlink:href="#stroked-email"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<?php
								$query="SELECT count(*) AS count FROM surat";
							    $result=mysqli_query($connect,$query);
							    $count=mysqli_fetch_assoc($result);
							    $surat=$count['count'];
							?>
							<div class="large"><h2>Data Surat Masuk : <?php echo $surat; ?></h2></div>
							<div class="text-muted"><a href="index.php?p=data-surat/lihat-data" class="btn btn-danger btn-sm">lihat data</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-6">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked blank document"><use xlink:href="#stroked-blank-document"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<?php
								$query="SELECT count(*) AS count FROM kategori_surat";
							    $result=mysqli_query($connect,$query);
							    $count=mysqli_fetch_assoc($result);
							    $kategori_surat=$count['count'];
							?>
							<div class="large"><h2>Kategori Surat Masuk : <?php echo $kategori_surat; ?></h2></div>
							<div class="text-muted"><a href="index.php?p=tipe-surat/home" class="btn btn-warning btn-sm">lihat data</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-6">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked arrow right"><use xlink:href="#stroked-arrow-right"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<?php
								$query="SELECT count(*) AS count FROM teruskan_kepada";
							    $result=mysqli_query($connect,$query);
							    $count=mysqli_fetch_assoc($result);
							    $teruskan_kepada=$count['count'];
							?>
							<div class="large"><h2>Penerusan Surat : <?php echo $teruskan_kepada; ?></h2></div>
							<div class="text-muted"><a href="index.php?p=kepada/home" class="btn btn-success btn-sm">lihat data</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	<!--/.main	

