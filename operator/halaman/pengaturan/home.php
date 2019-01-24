	<!-- Page Content -->
	<div id="page-content-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-md-12">
	            	<h1>Pengaturan Operator</h1>
	            	<hr>
	                <div class="col-md-5">
	                	<img src="img/setting.png" class="img-responsive center-block logo" style="margin-bottom: 10px; max-width: 300px; max-height: 300px;">
	                </div>
	                <div class="col-md-7">
	                	<div class="panel panel-default">
	                		<div class="panel-heading">Form Edit Operator</div>
	                		<div class="panel-body">
	                			<div class="col-md-12">
	                				<?php 
	                					$id_operator = $_SESSION['id_operator'];
	                					$query = "SELECT * FROM operator WHERE id_operator='$id_operator'";
	                					$result = mysqli_query($connect,$query);
	                					$data = mysqli_fetch_array($result);
	                				 ?>
	                				<form class="form-horizontal" action="pemroses/edit-operator.php" method="post">
	                					<?php

	                						if (isset($_GET['error'])) {
	                							$error = $_GET['error'];
	                							if ($error==1) {
	                								?>
	                								<div class="alert alert-warning alert-dismissible" role="alert">
	                									<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	                									<strong>Salah memasukkan password lama!</strong>
	                								</div>

	                								<?php
	                							}
	                							elseif($error==2)
	                							{
	                								?>
	                								<div class="alert alert-warning alert-dismissible" role="alert">
	                									<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	                									<strong>Password konfirmasi tidak cocok!!</strong>
	                								</div>

	                								<?php
	                							}
	                							else{
	                								?>
	                								<div class="alert alert-warning alert-dismissible" role="alert">
	                									<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	                									<strong>Panjang password minimal 6 karakter!!</strong>
	                								</div>

	                								<?php
	                							}
	                						}

	                					?>
	                					<fieldset>
	                					<input type="hidden" name="id_operator" value="<?php echo $_SESSION['id_operator']; ?>">
	                						<!-- Username Operator-->
	                						<div class="form-group">
	                							<label class="col-md-4 control-label" for="name">Username</label>
	                							<div class="col-md-8">
	                								<input id="name" name="usnam_operator" type="text" placeholder="username" class="form-control" value="<?php echo $data['usnam_operator']; ?>" required>
	                							</div>
	                						</div>

	                						<!-- Password Lama Operator-->
	                						<div class="form-group">
	                							<label class="col-md-4 control-label" for="name">Password Lama</label>
	                							<div class="col-md-8">
	                								<input id="name" name="password_lama" type="password" placeholder="password lama" class="form-control" required>
	                							</div>
	                						</div>

	                						<!-- Password Baru Operator-->
	                						<div class="form-group">
	                							<label class="col-md-4 control-label" for="name">Password Baru</label>
	                							<div class="col-md-8">
	                								<input id="name" name="password_baru1" type="password" placeholder="password baru" class="form-control" required>
	                							</div>
	                						</div>

	                						<!-- Password Baru Konfirmasi-->
	                						<div class="form-group">
	                							<label class="col-md-4 control-label" for="name">Konfirmasi Password</label>
	                							<div class="col-md-8">
	                								<input id="name" name="password_baru2" type="password" placeholder="konfirmasi password" class="form-control" required>
	                							</div>
	                						</div>

	                						<!-- Tombol -->
	                						<div class="form-group">
	                							<div class="col-md-8 col-md-offset-1 pull-right">
	                								<button type="submit" class="btn btn-primary btn-lg">Ubah</button>
	                							</div>
	                						</div>
	                					</fieldset>
	                				</form>
	                			</div>
	                		</div>
	                	</div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- /#page-content-wrapper -->