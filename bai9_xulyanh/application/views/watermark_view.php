<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Watermark</title>
</head>
<body>
	<h1>Watermark</h1>
	<form action="<?php echo base_url(); ?>watermark/watermark_anh" method="post" enctype="multipart/form-data">
		<input type="file" name="anh">
		<input type="submit" name="resize" value="Upload & Watermark">
	</form>
</body>
</html>