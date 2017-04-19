<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Edit Data Siswa</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<nav class="navbar navbar-default" role="navigation">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="#">UTS</a>
								</div>
						
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex1-collapse">
									<ul class="nav navbar-nav">
										<li class="active"><a href="<?php echo site_url('kategori') ?>">Data Kelas</a></li>
									</ul>
									<ul class="nav navbar-nav navbar-right">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Qotrunnada Widadu Izdihar <b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</li>
									</ul>
								</div><!-- /.navbar-collapse -->
						</div>
						</nav>

					</div>	

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php echo form_open_multipart('siswa/update/'.$this->uri->segment(3)); ?>
								<legend>Edit Data Siswa</legend>
								<?php echo validation_errors(); ?>	
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
								
								<?php if ($siswa_list[0]->foto == null) {
													?>
													<h3 align="center">Belum ada Foto</h3>
													<?php
												} else {
												?>
													<img src="<?php echo base_url('') ?>assets/uploads/<?php echo $siswa_list[0]->foto ?>" alt="" height="50" class="img-responsive img-rounded">
												<?php
												}
												 ?>
								</div>							
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<div class="table-responsive">
										<table class="table table-hover">											
											<tbody>
												<div class="form-group">
												
												<tr>
													<td><label for="">Nama</label>
													<input type="text" class="form-control" id="nama" name="nama" placeholder="Input field" value="<?php echo $siswa_list[0]->nama ?>"></td>
												</tr>
												<tr>
													<td><label for="">Tanggal Lahir</label>
													<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Input field" value="<?php echo $siswa_list[0]->tanggal_lahir ?>"></td>
												</tr>												
												<div class="form-group">
													<td><label for="">Foto</label>
													
													<input type="file" name="userfile" size="20"></td>
												</div>		
												<tr>												
													<td><button type="submit" class="btn btn-primary">Submit</button></td>
												</tr>
												</div>
											</tbody>
										</table>
									</div>
								</div>
								
					<?php echo form_close(); ?>
					</div>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>