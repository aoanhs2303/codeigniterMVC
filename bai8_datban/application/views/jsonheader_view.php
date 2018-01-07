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
				    <h1 class="display-4">Sửa HEADER</h1>
				    <p class="lead">Cho này cho phép sửa header.</p>
				  </div>
				</div>

				<form action="<?php echo base_url(); ?>index.php/tintuc/suaHeader" enctype="multipart/form-data" method="post">
				<?php foreach ($dulieu as $key => $value) { 
					if($key == 'mangXH') {$mangXH = $value;} 
					if($key == 'soHotLine') {$hotline = $value;}
					if($key == 'gioMoCua') {$giomocua = $value;}
					if($key == 'logo') {$logo = $value;}
				}
				?>
				 
				  <div class="alert alert-info">Mạng XH</div>
				  <div class="form-group">

				    <label for="email">Link FB</label>
				    <input type="text" class="form-control" id="linkFB" name="linkFB" value="<?php echo $mangXH['linkFB']; ?>">
				    <label for="email">Link Twitter</label>
				    <input type="text" class="form-control" id="linkTW" name="linkTW" value="<?php echo $mangXH['linkTW']; ?>">
				    <label for="email">Link Pinterest</label>
				    <input type="text" class="form-control" id="linkP" name="linkTW" value="<?php echo $mangXH['linkTW']; ?>">
				    <label for="email">Link Google+</label>
				    <input type="text" class="form-control" id="linkGP" name="linkGP" value="<?php echo $mangXH['linkGP']; ?>">
				  </div>
				  <div class="alert alert-success">Số Hotline</div>
				  <div class="form-group">
				    <label for="email">Phần text</label>
				    <input type="text" class="form-control" id="textHotLine" name="textHotLine" value="<?php echo $hotline['textHotLine']; ?>">
				    <label for="email">Số điện thoại</label>
				    <input type="text" class="form-control" id="sdt" name="sdt" value="<?php echo $hotline['sdt']; ?>">
				  </div>
				  <div class="alert alert-danger">Giờ mở cửa</div>
				  <div class="form-group">
				    <label for="email">Phần text</label>
				    <input type="text" class="form-control" id="text" name="textgio" value="<?php echo $giomocua['text']; ?>">
				    <label for="email">Thời gian</label>
				    <input type="text" class="form-control" id="gio" name="gio" value="<?php echo $giomocua['gio']; ?>">
				  </div>
				  <div class="alert alert-warning">Logo</div>
				  <div class="form-group">
				    <label for="pwd">Logo:</label>
				    <img src="<?php echo $logo; ?>" alt="Ảnh logo">
				    <input type="hidden" name="logocu" id="logocu" value="<?php echo $logo; ?>">
				    <input type="file" class="form-control" id="logo" name="logo">
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>

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