<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= THEMES_DASHBOARD ?>/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="<?= THEMES_DASHBOARD ?>/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?= THEMES_DASHBOARD ?>/vendors/styles/style.css">
</head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html" class="text-secondary">
					PST.CO.ID
				</a>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="<?= THEMES_SITE ?>/images/PSTLOGO.PNG" alt="" class="img-fluid">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
                        <?php $this->load->view($page)?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?= THEMES_DASHBOARD ?>/vendors/scripts/core.js"></script>
    <script src="<?= THEMES_DASHBOARD ?>/vendors/scripts/script.min.js"></script>
    <script src="<?= THEMES_DASHBOARD ?>/vendors/scripts/process.js"></script>
    <script src="<?= THEMES_DASHBOARD ?>/vendors/scripts/layout-settings.js"></script>
</body>
</html>