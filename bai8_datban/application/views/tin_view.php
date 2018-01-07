<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Thêm danh mục</title>
<!-- Stylesheets -->
<link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/revolution-slider.css" rel="stylesheet">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo base_url(); ?>images/favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>ckeditor/ckfinder/ckfinder.js"></script>
</head>
<body>
	<?php 
		include('header_backend.php');
	 ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<div class="jumbotron jumbotron-fluid">
				  <div class="container">
				    <h1 class="display-4">Thêm tin tức</h1>
				    <p class="lead">Thêm đi em.</p>
				  </div>
				</div>
				<form action="<?php echo base_url();?>index.php/tin/themmoitin" method="POST" enctype="multipart/form-data">
				  <div class="form-group">
				    <label >Tiêu đề</label>
				    <input type="text" class="form-control" id="tieude" name="tieude" placeholder="Nhập tiêu đề">
				  </div>
				  <div class="form-group">
				    <label >Ảnh tin</label>
				    <input type="file" class="form-control" id="anhtin" name="anhtin" placeholder="Ảnh tin">
				  </div>
				  <div class="form-group">
				    <label >Trich dẫn</label>
				    <input type="text" class="form-control" id="trichdan" name="trichdan" placeholder="Nhập trích dẫn">
				  </div>
				  <div class="form-group">
				  	<label >Danh mục</label>
				   	<select class="form-control" name="iddanhmuc" id="iddanhmuc">
				   		<?php foreach ($danhmuc as $key => $value) { ?>
				   			<option value="<?php echo $value['id']; ?>"><?php echo $value['tendanhmuc']; ?></option>
				   		<?php } ?>
				   	</select>
				  </div>
				  <div class="form-group">
				    <label >Nội dung tin</label>
				    <textarea class="form-control noidungtin" name="noidungtin" id="noidungtin" cols="30" rows="10"></textarea>
				  </div>
				  <div class="form-group">
				  	<input type="submit" value="Thêm mới">
				  </div>
				</form>
			</div> <!-- het them danh muc -->
			<div class="col-sm-6 danhmuctin">
				<div class="jumbotron jumbotron-fluid">
				  <div class="container">
				    <h1 class="display-4">Danh mục tin</h1>
				    <p class="lead">Danh sách tin tức.</p>
				  </div>

	
				</div>
				<div class="row">
					<?php foreach ($tin as $key => $value) { ?>
					<div class="col-sm-12">
						<div class="card card-inverse" style="background-color: #333; border-color: #333; padding: 20px; margin-bottom: 10px;">
						  <div class="card-block">
						    <h3 class="card-title nhom1" style="color: white">
						    	<?php echo $value['tieude']; ?>
						    </h3>
						    <?php if(empty($value['anhtin'])){ ?>
								<img src="http://lorempixel.com/700/300/" alt="" class="img-fluid">
						    <?php } else { ?>
						    	<img src="<?php echo $value['anhtin'] ?>" alt="" class="img-fluid">
						    <?php } ?>
						    
						    <p class="card-text"><?php echo 'Tạo ngày: ' . date('d/m/Y',$value['ngaytao']) ?></p>
							<p><?php echo $value['trichdan']; ?></p>
						    
						  </div>
						  <a href="<?php base_url();?>suatin/<?php echo $value['id']; ?>" class="btn btn-warning sua">
						  	<i class="fa fa-pencil"></i>
						  </a>
						  <a href="<?php base_url(); ?>xoatin/<?php echo $value['id']; ?>" class="btn btn-danger xoa">
						  	<i class="fa fa-times"></i>
						  </a>
						</div>						
					</div>
					<?php } ?>

				</div>

			</div>
		</div>
	</div>
	<script>
		CKEDITOR.replace( 'noidungtin', {
			filebrowserBrowseUrl : '../../ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : '../../ckfinder/ckfinder.html?type=Images'
		});
	</script>
</body>
</html>