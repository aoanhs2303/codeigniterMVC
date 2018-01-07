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
	<div class="container">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="jumbotron jumbotron-fluid">
				  <div class="container">
				    <h1 class="display-4">Sửa tin tức</h1>
				    <p class="lead">Sửa đi em.</p>
				  </div>
				</div>
				<form action="<?php echo base_url();?>index.php/tin/luutindasua" method="POST" enctype="multipart/form-data">
				<?php foreach ($dulieusua as $key => $value) { ?>			
				  <input type="hidden" name="id" id="id" value="<?php echo $value['id']; ?>" ?>
				  <div class="form-group">
				    <label >Tiêu đề</label>
				    <input type="text" class="form-control" id="tieude" name="tieude" value="<?php echo $value['tieude']; ?>">
				  </div>
				  <div class="form-group">
				    <label >Ảnh tin</label>
				    <img src="<?php echo $value['anhtin'] ?>" class="img-fluid" alt="Ảnh tin">
				    <input type="hidden" name="anhtincu" id="anhtincu" value="<?php echo $value['anhtin']; ?>">
				    <input type="file" class="form-control" id="anhtin" name="anhtin" placeholder="Ảnh tin">
				  </div>
				  <div class="form-group">
				    <label >Trich dẫn</label>
				    <input type="text" class="form-control" id="trichdan" name="trichdan" value="<?php echo $value['trichdan'] ?>">
				  </div>
				  <div class="form-group">
				  	<label >Danh mục</label>
				   	<select class="form-control" name="iddanhmuc" id="iddanhmuc">
 				   		<?php foreach ($danhmuc as $key => $valueDM) {  if ($value['iddanhmuc'] == $valueDM['id']) { ?>
							<option selected value="<?php echo $valueDM['id']; ?>"><?php echo $valueDM['tendanhmuc']; ?></option>
						<?php } else { ?>
							<option value="<?php echo $valueDM['id']; ?>"><?php echo $valueDM['tendanhmuc']; ?></option>
				   						   			
				   		<?php } }?>
				   		
				   	</select>
				  </div>
				  <div class="form-group">
				    <label >Nội dung tin</label>
				    <textarea class="form-control noidungtin" name="noidungtin" id="noidungtin" cols="30" rows="10">
				    	<?php echo $value['noidungtin']; ?>
				    </textarea>
				  </div>
				  <div class="form-group">
				  	<input type="submit" class="btn btn-danger btn-block" value="Sửa">
				  </div>
				  <?php } ?>
				</form>
			</div> <!-- het them danh muc -->

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