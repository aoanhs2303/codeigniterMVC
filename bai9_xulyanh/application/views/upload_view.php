<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload</title>
</head>
<body>
	<h1>Upload</h1>
	<form action="<?php echo base_url(); ?>/upload/upload_file" enctype="multipart/form-data" method="post">
		<input type="file" name="anh" id="anh">
		<input type="submit" name="gui" value="Upload">
	</form>
</body>
</html>