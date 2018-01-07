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
	<title>Send mail</title>
</head>
<body>
	<div class="container">
		<h6 class="display-4 text-center">MAIL</h6>
	<form method="post" action="Send_mail/do_send">
	  <div class="form-group">
	    <label for="formGroupExampleInput">Email cần gửi</label>
	    <input type="text" class="form-control" name="mail" id="formGroupExampleInput" placeholder="Nhập email">
	  </div>
	  <div class="form-group">
	    <label for="formGroupExampleInput2">Tên người nhận</label>
	    <input type="text" class="form-control" name="ten" id="formGroupExampleInput2" placeholder="Nhập tên">
	  </div>
	  <fieldset class="form-group">
	    <label for="formGroupExampleInput2">Nội dung</label>
	    <textarea id="" cols="30" rows="10" name="noidung" class="form-control" placeholder="Nội dung ... "></textarea>
	  </fieldset>
	  <div class="form-group">
	    <input type="submit" class="btn btn-danger">
	  </div>
	</form>	
	</div>
	
</body>
</html>