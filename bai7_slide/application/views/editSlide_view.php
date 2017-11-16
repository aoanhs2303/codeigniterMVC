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
		<h2 class="text-center display-4">Sửa slide</h2>
		<div class="row">
			<div class="col-sm-6 push-sm-3">
				<form method="post" action="Slides/suaSilde" enctype="multipart/form-data">
					<?php $dem = 0; ?>
					<?php foreach ($mangdl as $key => $value) { ?>
					<?php $dem++; ?>
				<h2>Slide số: <?php echo $dem; ?></h2>
				<div class="form-group">
				    <label for="tieudeslide">Tiêu đề slide</label>
				    <input type="text" name="title[]" class="form-control" id="tieudeslide" value="<?php echo $value['title'] ?>">
				  </div>
				  <div class="form-group">
				    <label for="description">Mô tả slide</label>
				    <input type="text" name="description[]" class="form-control" id="description" value="<?php echo $value['description'] ?>">
				  </div>
				  <div class="form-group">
				    <label for="button_link">Link của nút</label>
				    <input type="text" name="button_link[]" class="form-control" id="button_link" value="<?php echo $value['button_link'] ?>">
				  </div>
				  <div class="form-group">
				    <label for="button_text">Text của nút</label>
				    <input type="text" class="form-control" id="button_text" value="<?php echo $value['button_text'] ?>" name="button_text[]">
				  </div>
				  <div class="form-group">
				   <img src="<?php echo $value['slide_image'] ?>" alt="" style="width: 300px; height: 300px;">
				  </div>

				  <div class="form-group">
					<input type="text" name="slide_image_old[]" id="slide_image" class="form-control" value="<?php echo $value['slide_image'] ?>">
				  	<label for="">Upload Ảnh</label>
				    <input type="file" name="slide_image[]" id="slide_image" class="form-control">
				  </div>
				  <div class="form-group">
				    <input type="submit" class="btn btn-outline-primary btn-block" value="Sửa">
				  </div>

					<?php } ?>

				  
				</form>			
			</div>
		</div>
		
	</div>
	
</body>
</html>