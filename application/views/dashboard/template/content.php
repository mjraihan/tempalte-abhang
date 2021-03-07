<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PT. Prima Sistem Terpadu - Admin - <?= $title?></title>
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<script src="<?= THEMES_DASHBOARD ?>/vendors/scripts/core.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= THEMES_DASHBOARD ?>/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="<?= THEMES_DASHBOARD ?>/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?= THEMES_DASHBOARD ?>/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="<?= THEMES_DASHBOARD ?>/src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="<?= THEMES_DASHBOARD ?>/vendors/styles/style.css">
</head>
<body>
	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
		</div>
		<div class="header-right">
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
						<span class="user-icon text-secondary">
							<span class="ti-user"></span>
						</span>
						<span class="user-name"><?= get_session('admin_username')?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="#"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="<?= base_url('admin/logout')?>"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				PST.CO.ID
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="#" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Beranda</span>
						</a>
					</li>
					<li>
						<a href="#" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-newspaper-1"></span><span class="mtext">Konten</span>
						</a>
						<a href="#" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-support-1"></span><span class="mtext">Service</span>
						</a>
						<a href="#" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-deal"></span><span class="mtext">Client</span>
						</a>
						<a href="#" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-id-card"></span><span class="mtext">Kontak</span>
						</a>
						<a href="#" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-internet-2"></span><span class="mtext">Sosial Media</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>
	<div class="main-container">
		<div class="pd-ltr-20">
			<?php $this->load->view($page)?>
		</div>
	</div>
	<script src="<?= THEMES_DASHBOARD ?>/vendors/scripts/script.min.js"></script>
	<script src="<?= THEMES_DASHBOARD ?>/vendors/scripts/process.js"></script>
	<script src="<?= THEMES_DASHBOARD ?>/vendors/scripts/layout-settings.js"></script>
	<script src="<?= THEMES_DASHBOARD ?>/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="<?= THEMES_DASHBOARD ?>/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?= THEMES_DASHBOARD ?>/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="<?= THEMES_DASHBOARD ?>/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="<?= THEMES_DASHBOARD ?>/vendors/scripts/datatable-setting.js"></script>
	<script src="<?= THEMES_DASHBOARD ?>/src/plugins/jQuery-Knob-master/jquery.knob.min.js"></script>
	<script src="<?= THEMES_DASHBOARD ?>/vendors/scripts/knob-chart-setting.js"></script>
	<script src="<?= THEMES_DASHBOARD ?>/src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
	<script src="https://code.highcharts.com/highcharts-3d.js"></script>
	<script src="<?= THEMES_DASHBOARD ?>/src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
	<script src="<?= THEMES_DASHBOARD ?>/vendors/scripts/dashboard.js"></script>
</body>
</html>