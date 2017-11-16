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

	<div class="container">
		<h3 class="text-center">
				Các xin và giá hiện có
			</h3>
			<hr>
	</div>
	<div class="container">
		<div class="row">
			
		<?php foreach ($dulieutucontroller as $key => $value) { ?>
			<div class="col-sm-4">
				<div class="card card-block">
					<h3 class="card-title">Số sim: <?php echo $value['so']; ?></h3>
					<p class="card-text">Giá tiền: <?php echo $value['gia']; ?></p>
					<a href="showData/deleteData/<?php echo $value['id'] ?>" class="btn btn-danger"><i class="fa fa-times"></i></a>
					
					<a href="showData/editSim/<?php echo $value['id']; ?>" class="btn btn-success"><i class="fa fa-pencil"></i></a>
				</div>
			</div>
		<?php	} ?>
		</div>
	</div>
</body>
</html>