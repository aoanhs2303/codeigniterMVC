<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crop</title>
</head>
<body>
	<h1>Crop</h1>
	<form action="<?php echo base_url(); ?>crop/crop_anh" method="post" enctype="multipart/form-data">
		<input type="file" name="anh">
		<input type="submit" name="resize" value="Upload và Resize">
	</form>
</body>
</html>