<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thành công</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>vendor/angular.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/angular-route.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>main.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>style.css">
</head>
<body>
	<?php require('header_sim.php'); ?>
	<h2 class="text-center display-3">Bạn đã xóa thành công</h2>
	<a href="<?php echo base_url(); ?>index.php/showData" class="btn btn-info btn-lg">Quay về</a>
</body>
</html>