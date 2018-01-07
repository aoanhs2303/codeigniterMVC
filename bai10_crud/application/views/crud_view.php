<!DOCTYPE html>
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
		<div class="col-sm-8 push-sm-2">
			<h1>CRUD bằng phím tắt</h1>
			<form action="<?php echo base_url(); ?>crud/add" method="post">
			  <div class="form-group">
			    <label for="email">Email address:</label>
			    <input type="email" name="username" class="form-control" id="email">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="text" name="password" class="form-control" id="pwd">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Level:</label>
			    <select name="level" id="" class="form-control">
			    	<option value="1">Admin</option>
			    	<option value="2">User</option>
			    </select>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>			
		</div>
	</div>

</body>
</html>