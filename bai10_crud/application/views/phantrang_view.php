<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
	<title>Phân trang</title>
</head>
<body>
	<div class="container">
		<h1 class="text-center">Pagination bằng phím "pagination"</h1>
		<hr>
		<div class="row mt-3">
		<?php foreach ($dulieu as $key => $motnguoi) { ?>
		  <div class="col-sm-6">
		    <div class="card">
		      <div class="card-block">
		        <h3 class="card-title">Email: <?php echo $motnguoi['username']; ?></h3>
		        <p class="card-text">Password: <?php echo $motnguoi['password']; ?>.</p>
		        <p class="card-text">Level: <?php echo $motnguoi['level'] ?>.</p>
		        <a href="#" class="btn btn-primary">Go somewhere</a>
		      </div>
		    </div>
		  </div>
		<?php } ?>	


		</div>
		<?php echo $this->pagination->create_links(); ?>
	</div>
</body>
</html>