<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD</title>
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
		<h2>Quản lý menu đa cấp</h2>
		<div class="row">
			<div class="col-sm-6 push-sm-3">
				<form action="<?php base_url(); ?>menudacap/add" method="post">
				  <div class="form-group">
				    <label for="email">Tiêu đề menu</label>
				    <input type="text" class="form-control" id="email" name="tieude">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Link menu:</label>
				    <input type="text" class="form-control" id="pwd" name="link">
				  </div>
				  <div class="form-group">
				    <label for="pwd">ID menu cha</label>
				    <input type="text" class="form-control" id="pwd" name="menucha" value="0">
				  </div>

				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>

	</div>
	
</body>
</html>