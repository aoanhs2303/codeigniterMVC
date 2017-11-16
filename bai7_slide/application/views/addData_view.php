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
	<title>Thêm dữ liệu</title>
</head>
<body>
	

	<div class="container">
		<h2 class="text-center display-4">Thêm slide</h2>
		<div class="row">
			<div class="col-sm-6 push-sm-3">
				<form method="post" action="Slides/addSlide" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="tieudeslide">Tiêu đề slide</label>
				    <input type="text" name="title" class="form-control" id="tieudeslide" placeholder="Example input">
				  </div>
				  <div class="form-group">
				    <label for="description">Mô tả slide</label>
				    <input type="text" name="description" class="form-control" id="description" placeholder="Another input">
				  </div>
				  <div class="form-group">
				    <label for="button_link">Link của nút</label>
				    <input type="text" name="button_link" class="form-control" id="button_link" placeholder="Another input">
				  </div>
				  <div class="form-group">
				    <label for="button_text">Text của nút</label>
				    <input type="text" class="form-control" id="button_text" placeholder="Another input" name="button_text">
				  </div>
				  <div class="form-group">
				  	<label for="">Upload Ảnh</label>
				    <input type="file" name="slide_image" id="slide_image" class="form-control">
				  </div>
				  <div class="form-group">
				    <input type="submit" class="btn btn-outline-danger btn-block" value="Thêm">
				  </div>
				</form>			
			</div>
		</div>
		
	</div>
	
</body>
</html>