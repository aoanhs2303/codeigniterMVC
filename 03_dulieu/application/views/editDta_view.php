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
				Edit SIM
			</h3>
			<hr>
	</div>
	<div class="container">
		<div class="row">
			
		<?php foreach ($mangketqua as $key => $value) { ?>
				<div class="container">
		<div class="row">
			<div class="col-8 push-sm-2">
				<form action="../updateData" method="post" enctype="multidata/form-data">
					<div class="card">
						<div class="card-block">
							<fieldset class="form-group">
								<label for="">ID</label>
								<input type="text" placeholder="ID" class="form-control" name="id" value="<?php echo $value['id'] ?>">
							</fieldset>
							<fieldset class="form-group">
								<label for="">Số điện thoại</label>
								<input type="text" placeholder="Nhập số diện thoại" class="form-control" name="so" value="<?php echo $value['so'] ?>">
							</fieldset>
							<fieldset class="form-group">
								<label for="">Giá tiền</label>
								<input type="text" placeholder="Nhập giá tiền" class="form-control" name="gia" value="<?php echo $value['gia'] ?>">
							</fieldset>
							<input type="submit" class="btn btn-success btn-block" value="Lưu">
							
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
		<?php	} ?>
		</div>
	</div>
</body>
</html>