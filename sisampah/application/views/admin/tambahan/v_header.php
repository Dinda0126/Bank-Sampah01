<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bank Sampah | Dashboard</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets2/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets2/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets2/bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets2/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets2/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets2/bower_components/morris.js/morris.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets2/bower_components/jvectormap/jquery-jvectormap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets2/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets2/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<header class="main-header">
			<a href="<?php echo base_url(); ?>" class="logo">
				<span class="logo-mini"><b>BANK</b></span>
				<span class="logo-lg"><b>BANK</b> SAMPAH</span>
			</a>

			<nav class="navbar navbar-static-top">

				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo base_url(); ?>assets2/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
								<span class="hidden-xs">HAK AKSES :</span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-header">
									<img src="<?php echo base_url(); ?>assets2/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
									<p>
										<?php echo $this->session->userdata('user') ?>
										<small>Hak akses : </small>
									</p>
								</li>

								<li class="user-footer">
									<div class="pull-left">
										<a href="<?php echo base_url() . 'dashboard/profil' ?>" class="btn btn-default btn-flat">Profil</a>
									</div>
									<div class="pull-right">
										<a href="<?php echo base_url() . 'administrator/logout' ?>" class="btn btn-default btn-flat">Keluar</a>
									</div>
								</li>
							</ul>
						</li>

					</ul>
				</div>
			</nav>
		</header>
		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?php echo base_url(); ?>assets2/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<?php $h = $this->session->userdata('akses'); ?>
						<?php $u = $this->session->userdata('user'); ?>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>

				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>
					<li>
						<a href="<?php echo base_url() . 'welcome' ?>">
							<i class="fa fa-dashboard"></i>
							<span>Dashboard</span>


						</a>
					</li>
					<?php if ($h == '1') { ?>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-envira"></i>
								<span>Data Sampah</span>
							</a>
							<ul class="treeview-menu">
								<li>
									<a href="<?php echo base_url() . 'admin/kategori' ?>">
										<i class="fa fa-th"></i>
										<span>Kategori Sampah</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url() . 'admin/sampah' ?>">
										<i class="fa fa-th"></i>
										<span>Data Sampah</span>
									</a>
								</li>
								<li>

									</a>
								</li>

							</ul>
						</li>

						<li class="treeview">
							<a href="#">
								<i class="fa fa-th"></i>
								<span>Data Transaksi</span>
							</a>
							<ul class="treeview-menu">
								<li>
									<a href="<?php echo base_url() . 'admin/pembelian' ?>">
										<i class="fa fa-opencart"></i>
										<span>Pembelian</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url() . 'admin/penjualan' ?>">
										<i class="fa fa-cart-plus"></i>
										<span>Penjualan</span>
									</a>
								</li>
								<li>

									</a>
								</li>
							</ul>

						</li>
						<li>

							</a>
						</li>
						<li>
							<a href="<?php echo base_url() . 'admin/laporan' ?>">
								<i class="fa fa-book"></i>
								<span>Report</span>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url() . 'admin/grafik' ?>">
								<i class="fa fa-area-chart"></i>
								<span>Grafik</span>
							</a>
						</li>
						<li>

						</li>
						<li>
							<a href="<?php echo base_url() . 'admin/suplier' ?>">
								<i class="fa fa-users"></i>
								<span>Data Nasabah</span>
							</a>
						</li>
						<li>

							</a>
						</li>
						<li>
							<a href="<?php echo base_url() . 'admin/pengguna' ?>">
								<i class="fa fa-user"></i>
								<span>Pengaturan Akun</span>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url() . 'administrator/logout' ?>">
								<i class="fa fa-share"></i>
								<span>Keluar</span>
							</a>
						</li>
					<?php
					}
					?>
				</ul>
			</section>
		</aside>