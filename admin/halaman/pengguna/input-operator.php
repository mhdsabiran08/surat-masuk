	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Aplikasi Pengarsipan Surat</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Pengguna</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
				<div class="panel panel-default">
					<?php 
					    if (isset($_GET['error']))
					    {
					        ?>
					        <div class="alert alert-warning" role="alert">
					            <a href="#" class="alert-link">Password konfirmasi yang Anda masukkan tidak sama, silahkan coba lagi!</a>
					        </div>
					        <?php
					    }
					    else
					    {
					        
					    }

					    if(isset($_GET['nama_operator']) AND isset($_GET['usnam_operator']))
					    {
					        $nama_operator=$_GET['nama_operator'];
					        $usnam_operator=$_GET['usnam_operator'];
					    }
					    elseif(isset($_GET['nama_operator']) AND isset($_GET['usnam_operator']))
					    {
					        $nama_operator="";
					        $usnam_operator=$_GET['usnam_operator'];
					    }
					    else
					    {
					        $nama_operator="";
					        $usnam_operator="";
					    }
					?>
					<div class="panel-heading">Form Tambah Operator</div>
					<div class="panel-body">
						<div class="col-md-12">
							<form class="form-horizontal" action="pemroses/pengguna/tambah-operator.php" method="post">
								<fieldset>
									<!-- Nama Lengkap-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="name"> Nama Lengkap Operator </label>
										<div class="col-md-8">
											<input id="name" name="nama_operator" type="text" placeholder="nama lengkap operator" class="form-control" value="<?php echo $nama_operator; ?>" required="required">
										</div>
									</div>

									<!-- usnam_operator-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="name"> Username Operator </label>
										<div class="col-md-8">
											<input id="name" name="usnam_operator" type="text" placeholder="username operator" class="form-control" value="<?php echo $usnam_operator; ?>" required="required">
										</div>
									</div>

									<!-- Password-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="name"> Password </label>
										<div class="col-md-8">
											<input id="name" name="password" type="text" placeholder="password" class="form-control" required="required">
										</div>
									</div>

									<!-- Konfirmasi Password-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="name"> Konfirmasi Password </label>
										<div class="col-md-8">
											<input id="name" name="password2" type="text" placeholder="konfirmasi password" class="form-control" required="required">
										</div>
									</div>

									<!-- Tombol -->
									<div class="form-group">
										<div class="col-md-4 col-md-offset-6 pull-right">
											<button type="submit" class="btn btn-success btn-md">Tambah</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div>
	