<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View --</title>
</head>
<style>	
	h2 {
		text-align: center;
		font-family: "segoe ui light";
		padding: 10px;
		border-bottom: 1px dashed black;
	}
</style>
<body>
	<h2>Dữ liệu các số điện thoại của cửa hàng bán sim</h2>
	<ul>
		<?php
			foreach ($danhsachsdt as $key) { ?>
				<li> <?php echo $key; ?> </li>
			<?php } ?>
		
	</ul>
</body>
</html>