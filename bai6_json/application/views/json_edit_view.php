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
	<title>Sửa JSON</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				
			
		<form method="post" action="jsonedit/do_edit">
		<?php $stt = 0; ?>
		<?php foreach ($mangdl as $key) { ?>
			<?php $stt++; ?>
			<h2>Contact số: <?php echo $stt; ?></h2>
			<hr>
			<div class="form-group">
		    <label for="ten">Name:</label>
		    <input type="text" class="form-control" id="ten" name="ten[]" placeholder="Nhap ten" value="<?php echo $key['ten']; ?>">
		  </div>
		  <div class="form-group">
		    <label for="sdt">Tel</label>
		    <input type="text" class="form-control" id="sdt" name="sdt[]" placeholder="Nhap SDT" value="<?php echo $key['sdt']; ?>">
		  </div>
		<?php } ?>
			
			</div>
		</div>

		  
		  <div class="form-group">
		    <input type="submit" class="btn btn-success btn-block" value="Lưu">
		  </div>
		</form>	
		
		
	</div>
</body>
</html>