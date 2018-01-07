
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

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="jumbotron jumbotron-fluid">
				  <div class="container">
				    <h1 class="display-4">Thêm danh mục</h1>
				    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
				  </div>
				</div>
				<form action="<?php echo base_url(); ?>index.php/tin/updateDanhmuc" method="post">
				  <?php foreach ($mangDL as $value) { ?>
					   <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $value['id']; ?>">

					  <div class="form-group">
					    <label for="tendanhmuc">Tên danh mục</label>
					    <input type="text" class="form-control" id="tendanhmuc" name="tendanhmuc" value="<?php echo $value['tendanhmuc']; ?>">
					  </div>	
				  <?php } ?>
				  
				  <div class="form-group">
				    <input type="submit" class="btn btn-success" id="" value="Sửa">
				  </div>
				</form>
			</div> <!-- het them danh muc -->

		</div>
	</div>
</body>
</html>