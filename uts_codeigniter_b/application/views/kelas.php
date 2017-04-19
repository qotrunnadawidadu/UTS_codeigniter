<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Data Kelas</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css">

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
										<li class="active"><a href="<?php echo site_url('kelas') ?>">Data Kelas</a></li>
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
						<h1>Kelas Siswa</h1>	
						<h2></h2>
						<h4>
						<a href="<?php echo site_url('kelas/create') ?>" type="text"><i class="glyphicon glyphicon-plus-sign"> </i> Tambah Data</a></h4>
					<div class="table-responsive">
							<table class="table table-hover" id="example">
								<thead>
									<tr>
										<th>Nama</th>										
										<th>Kelas</th>
										<th>Opsi</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($kelas as $key) { ?>
									<tr>
										<td><?php echo $key->nama ?></td>										
										<td>
											<a href="<?php echo site_url('siswa/index/').$key->id ?>" type="button" class="btn btn-info">Siswa</a>
										<td>
										<a href="<?php echo site_url('kelas/update/').$key->id ?>" onClick="return confirm('Apakah Anda Yakin Ingin Edit data?')" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a> 										
										<a href="<?php echo site_url('kelas/delete/').$key->id ?>" onclick="return confirm('Apakah Anda Yakin Ingin Hapus data?')" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
										</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
					</div>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url('') ?>assets/datatables.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script type="text/javascript">
 			$(document).ready(function(){
 				$('#example').DataTable();
 			});
 		</script>
	</body>
</html>