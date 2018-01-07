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

	<!-- TABLE TO EXCEL -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.table2excel.js"></script>

	</head>
<body>
	<div class="container">
		<h2 class="text-center">Table to excel</h2>
		<table class="table bangdulieu">
	    <thead>
	      <tr>
	        <th>STT</th>
	        <th>Username</th>
	        <th>Password</th>
	        <th>Level</th>
	      </tr>
	    </thead>
	    <tbody>
	    <?php 
	    $c = 0;
	    foreach ($dulieu as $key => $mot) { 
	    $c++;
	    ?>
	      <tr>
	      	<td><?php echo $c; ?></td>
	        <td><?php echo $mot['username']; ?></td>
	        <td><?php echo $mot['password']; ?></td>
	        <td><?php echo $mot['level']; ?></td>
	      </tr>
	    <?php } ?>

	    </tbody>
	  </table>
	  <div class="container">
	  	<div class="row">
	  		<div class="col-sm-6 push-sm-3">
	  			<button class="btn btn-success btnexcel">Export ra excel</button>
	  		</div>
	  	</div>
	  </div>
	</div>
	<script>
			$(function() {
				$("button.btnexcel").click(function(){
				$("table.bangdulieu").table2excel({
					exclude: ".noExl",
    				name: "Excel Document Name"
				}); 
				 });
			});		
	</script>
</body>
</html>