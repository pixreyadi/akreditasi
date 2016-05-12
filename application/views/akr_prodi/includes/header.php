<?php
$linkSplit = explode("/", $_SERVER["PHP_SELF"]);
$menu = end($linkSplit);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Akreditasi UMM</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<link href="<?php echo base_url().'assets/css/bootstrap.css'; ?>" type="text/css" rel="stylesheet" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url().'assets/css/dataTables.bootstrap.css'; ?>" type="text/css" rel="stylesheet" />
	<link href="<?php echo base_url().'assets/css/style.css'; ?>" type="text/css" rel="stylesheet" />
	<style type="text/css">
		.validation-text{
			color:#F55;
			font-size:9pt;
			font-weight:normal;
		}
	</style>

	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jscomponent.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/validasi.js'; ?>"></script>
</head>
<body>
<div class="header">
	<div class="header-title"><b>Admin</b> </div>
	<div class="header-menu-icon" onclick="hideMenu();" align="center"><i class="fa fa-bars"></i></div>
	<div class="selamat_datang">Sistem Akreditasi UMM</div>
</div>
<div class="full-content">
	<div class="sidebar-menu" id="sidebar-menu">
		<div class="menu-content">
			<div class="menu-profil">
				<div class="photo-place">
					<img src="<?php echo base_url().'assets/foto/admin.png'; ?>" class="photo-profil">
				</div>
				<div class="name-place">
					<b>Nama pengguna</b><br />
					<i class="fa fa-circle text-success"></i> Online
				</div>
			</div>
			<div class="menu-nav">MENU NAVIGASI</div>
			<ul id="menu">
				<li><a <?php if($menu=="home") echo 'class="menu-active"'; ?> href="<?php echo site_url('akr_prodi/home'); ?>"><i class="fa fa-home"></i><span class="menu-text">Home</span></a></li>
				<li><a <?php if($menu=="standarSatu") echo 'class="menu-active"'; ?> href="<?php echo site_url('akr_prodi/standarSatu'); ?>"><i class="fa fa-list"></i><span class="menu-text">Standard 1</span></a></li>
				<li><a href="#"><i class="fa fa-list"></i><span class="menu-text">Standard 2</span></a></li>
				<li><a href="#"><i class="fa fa-list"></i><span class="menu-text">Standard 3</span></a></li>
				<li><a href="#"><i class="fa fa-list"></i><span class="menu-text">Standard 4</span></a></li>
				<li><a href="#"><i class="fa fa-list"></i><span class="menu-text">Standard 5</span></a></li>
				<li><a <?php if($menu=="standarEnam") echo 'class="menu-active"'; ?> href="<?php echo site_url('akr_prodi/standarEnam'); ?>"><i class="fa fa-list"></i><span class="menu-text">Standard 6</span></a></li>
				<li><a href="#"><i class="fa fa-list"></i><span class="menu-text">Standard 7</span></a></li>

				<li><a href="#"><i class="fa fa-list"></i><span class="menu-text">News</span></a></li>
				<li><a href="#"><i class="fa fa-list"></i><span class="menu-text">Sejarah</span></a></li>
				<li><a href="#"><i class="fa fa-list"></i><span class="menu-text">Visi & Misi</span></a></li>
				<li><a href="#"><i class="fa fa-list"></i><span class="menu-text">About</span></a></li>
				<li><a href="#"><i class="fa fa-list"></i><span class="menu-text">Cara Akreditasi</span></a></li>
				<li><a href="#"><i class="fa fa-list"></i><span class="menu-text">Upload Dokumen Borang</span></a></li>
				<li><a href="#"><i class="fa fa-list"></i><span class="menu-text">Program Kerja</span></a></li>
				<li><a href="#"><i class="fa fa-list"></i><span class="menu-text">Informasi Akreditasi</span></a></li>
				<li><a href="#"><i class="fa fa-list"></i><span class="menu-text">Notifikasi Akreditasi</span></a></li>
				<li><a href="#"><i class="fa fa-sign-out"></i><span class="menu-text">Keluar</span></a></li>
			</ul>
		</div>
	</div>
</div>
<div id="content">
<div class="content-inner">
<div style="height:15px;"></div>
