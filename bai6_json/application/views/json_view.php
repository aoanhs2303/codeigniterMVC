<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>vendor/angular.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/angular-route.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>main.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?> style.css">
	<title>View ket qua</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<?php foreach ($mangketqua as $value) { ?>
				<div class="col-sm-4">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">Tên: <?php echo $value->ten; ?></h4>
							<p class="card-text">SDT: <?php echo $value->sdt; ?></p>
							<a href="json/xoa_json/<?php echo $value->sdt; ?>" class="btn btn-danger"><i class="fa fa-times"></i></a>
						</div>
					</div>	
				</div>	
			<?php } ?>
			
		</div>
		
	</div>

	<div class="container">
		<hr>
		<h2 class="display-4 text-center">Thêm Nhân viên</h2>
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form method="post" action="json/do_add">
				  <div class="form-group">
				    <label for="ten">Name</label>
				    <input type="text" class="form-control" id="ten" name="ten" placeholder="Nhap ten">
				  </div>
				  <div class="form-group">
				    <label for="sdt">Tel</label>
				    <input type="text" class="form-control" id="sdt" name="sdt" placeholder="Nhap SDT">
				  </div>
				  <div class="form-group">
				    <input type="submit" class="btn btn-success" value="Thêm">
				  </div>
				</form>	
			</div>
		</div>
		
	</div>
</body>
</html>