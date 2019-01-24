<!DOCTYPE html>
<html lang="en">
<?php 
	session_start();
	if (!isset($_SESSION['id_admin']) && $_SESSION['username']) {
		header("location: login.php");
	} 
	include 'pemroses/koneksi.php';
	include 'bagian/link.php';
 ?>		
 	<body>
 		<!-- bagian header -->
 		<nav class="navbar navbar-inverse navbar-fixed-top header" role="navigation">
 			<div class="container-fluid">
 				<div class="navbar-header">
 					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
 						<span class="sr-only">Toggle navigation</span>
 						<span class="icon-bar"></span>
 						<span class="icon-bar"></span>
 						<span class="icon-bar"></span>
 					</button>
 					<a class="navbar-brand" href="#">Aplikasi Pengarsipan <span>Surat Masuk</span></a>
 					<ul class="user-menu">
 						<li>
 							<strong><a href="#" class="btn btn-sm btn-primary">Login sebagai : <?php echo ucwords($_SESSION['username']); ?> </a></strong>
 							<a class="btn btn-sm btn-danger" href="pemroses/logout.php"> Keluar </a>
 						</li>
 					</ul>
 				</div>
 								
 			</div><!-- /.container-fluid -->
 		</nav>
 		<!-- penutup bagian header -->

 		<!-- bagian menu-sidebar -->
 		<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
 			<div>
 				<img src="image/logo.png" class="img-responsive center-block" style="margin-top : 20px; max-width: 80px;">
 			</div>
 				
 			<ul class="nav menu">
 				<li role="presentation" class="divider"></li>
 				<li class="active">
 					<a href="index.php?p=dashboard">
 						<svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Beranda
 					</a>
 				</li>
 				<li role="presentation" class="divider"></li>
 				<li class="parent ">
 					<a href="#">
 						<span data-toggle="collapse" href="#pengguna"><svg class="glyph stroked male user"><use xlink:href="#stroked-male-user"/></svg> Pengguna </span> 
 					</a>
 					<ul class="children collapse" id="pengguna">
 						<li>
 							<a class="" href="index.php?p=pengguna/input-pengguna">
 								<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Tambah Admin
 							</a>
 						</li>
 						<li>
 							<a class="" href="index.php?p=pengguna/input-operator">
 								<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Tambah Operator
 							</a>
 						</li>
 						<li>
 							<a class="" href="index.php?p=pengguna/lihat-pengguna">
 								<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Lihat Data Admin
 							</a>
 						</li>
 						<li>
 							<a class="" href="index.php?p=pengguna/lihat-operator">
 								<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Lihat Data Operator
 							</a>
 						</li>
 					</ul>
 				</li>
 				<li class="parent ">
 					<a href="#">
 						<span data-toggle="collapse" href="#data-surat"><svg class="glyph stroked email"><use xlink:href="#stroked-email"/></svg> Data Surat Masuk </span> 
 					</a>
 					<ul class="children collapse" id="data-surat">
 						<li>
 							<a class="" href="index.php?p=data-surat/lihat-data">
 								<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Lihat Data Surat
 							</a>
 						</li>
 						<li>
 							<a class="" href="index.php?p=data-surat/kelola-data">
 								<svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg> Kelola Data Surat
 							</a>
 						</li>
 					</ul>
 				</li>
 				<li class="parent">
 					<a href="index.php?p=tipe-surat/home">
 						<svg class="glyph stroked blank document"><use xlink:href="#stroked-blank-document"/></svg> Kategori Surat Masuk
 					</a>
 				</li>
 				<li class="parent">
 					<a href="index.php?p=kepada/home">
 						<svg class="glyph stroked arrow right"><use xlink:href="#stroked-arrow-right"/></svg> Penerusan Surat
 					</a>
 				</li>
 				<li role="presentation" class="divider"></li>
 			</ul>
 			
 		</div><!--/.sidebar-->
		

 		<!-- penutup bagian menu-sidebar -->
 	</body>	
</html>