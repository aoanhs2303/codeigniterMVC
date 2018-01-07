
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

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<body>
		<?php 
		include('header_backend.php');
	 ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="jumbotron jumbotron-fluid">
				  <div class="container">
				    <h1 class="display-4">Thêm danh mục</h1>
				    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
				  </div>
				</div>
				<!-- <form action="<?php echo base_url(); ?>index.php/tin/themdanhmuc" method="post"> -->
				  <div class="form-group">
				    <label for="formGroupExampleInput">Tên danh mục</label>
				    <input type="text" class="form-control" id="tendanhmuc" name="tendanhmuc" placeholder="Nhập tên danh mục">
				  </div>
				  <div class="form-group">
				    <input type="button" class="btn btn-danger" id="themajax" value="Thêm">
				  </div>
				<!-- </form> -->
			</div> <!-- het them danh muc -->
			<div class="col-sm-6 listajax">
				<div class="jumbotron jumbotron-fluid">
				  <div class="container">
				    <h1 class="display-4">List danh mục</h1>
				    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
				  </div>
				</div>
				<?php foreach ($ketqua as $value) { 
					if($value['id'] != 35) { ?>
						<div class="card card-inverse" style="background-color: #333; border-color: #333; padding: 20px; margin-bottom: 10px;">
						  <div class="card-block">
						    <h3 class="card-title nhom1" style="color: white">
						    	
						    	<?php echo $value['tendanhmuc']; ?>
						    		
						    </h3>
						    <div class="nhom2 hidden">
						    	
								<div class="form-group">
									<div class="input-group">
										<input type="hidden" class="form-control" id="iddanhmuc" name="iddanhmuc" value="<?php echo $value['id']; ?>">
										<input type="text" class="form-control" id="tendanhmucsua" name="tendanhmucsua" value="<?php echo $value['tendanhmuc']; ?>">
										<span class="input-group-addon"><a data-href="" class="luuajax">Lưu</a></span>
									</div>
								</div>
							    	
						    </div>
						    <div style="transform: translateY(-35px);" class="nhom1">
						    	<a data-href="<?php echo $value['id'] ?>" class="btn btn-danger pull-right xoaajx"><i class="fa fa-times"></i></a>
						    	<a data-href="<?php echo $value['id'] ?>" class="btn btn-success pull-right suaajax"><i class="fa fa-pencil"></i></a>
						    </div>
						    
						  </div>
						 </div>	
					<?php } else { ?>
						<div class="card card-inverse" style="background-color: #333; border-color: #333; padding: 20px; margin-bottom: 10px;">
						  <div class="card-block">
						    <h3 class="card-title nhom1" style="color: white">
						    	
						    	<?php echo $value['tendanhmuc']; ?>
						    		
						    </h3>
						    <div class="nhom2 hidden">
						    	
								<div class="form-group">
									<div class="input-group">
										<input type="hidden" class="form-control" id="iddanhmuc" name="iddanhmuc" value="<?php echo $value['id']; ?>">
										<input type="text" class="form-control" id="tendanhmucsua" name="tendanhmucsua" value="<?php echo $value['tendanhmuc']; ?>">
										<span class="input-group-addon"><a data-href="" class="luuajax">Lưu</a></span>
									</div>
								</div>
							    	
						    </div>
						    <div style="transform: translateY(-35px);" class="nhom1">
						    	<a data-href="<?php echo $value['id'] ?>" class="btn btn-danger pull-right xoaajx disabled"><i class="fa fa-times"></i></a>
						    	<a data-href="<?php echo $value['id'] ?>" class="btn btn-success pull-right suaajax"><i class="fa fa-pencil"></i></a>
						    </div>
						    
						  </div>
						 </div>
					


					
				<?php } } ?>
				
			</div>
		</div>
	</div>
	<script style="js/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>
		$(function() {
			
			$('#themajax').click(function(event) {
				var duongdan = '<?php echo base_url(); ?>';	
				$.ajax({
					url: duongdan + 'index.php/tin/addJquery',
					type: 'POST',
					dataType: 'json',
					data: {
						tendanhmuc: $('#tendanhmuc').val()
					}
					// success: function(res) {
					// 	console.log(res);
					// }
				})
				.done(function() {
					console.log("success");
				})
				.fail(function() {
					console.log("error");
				})
				.always(function(res) {
					console.log(res);
					console.log("complete");
					var noidung = `<div class="card card-inverse" style="background-color: #333; border-color: #333; padding: 20px; margin-bottom: 10px;">
					  <div class="card-block">
					    <h3 class="card-title" style="color: white">`+$('#tendanhmuc').val()+`</h3>
					    <div style="transform: translateY(-35px);">
							<a data-href="`+res+`" class="btn btn-danger pull-right xoaajx"><i class="fa fa-times"></i></a>
					    	<a data-href="`+res+`" class="btn btn-success pull-right suaajax"><i class="fa fa-pencil"></i></a>
					    </div>
					    
					  </div>
					</div>	`
					$('.listajax').append(noidung);
				}); 
				
			}); // het jquery nut them

			$('body').on('click', '.xoaajx', function(event) {
				idtin = $(this).data('href'); // lay id
				console.log(idtin);
				linkxoa = '<?php echo base_url(); ?>';
				DOM_Xoa = $(this).parent().parent().parent();
				console.log(DOM_Xoa)
				$.ajax({
					url: linkxoa + 'index.php/tin/xoadanhmuc/' + idtin,
					type: 'POST',
					dataType: 'json'
				})
				.done(function() {
					console.log("success");
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					// xoa luon khong can load
					DOM_Xoa.remove();
				});

				return false; // khong cho linh nay chuyen sang trang khac
			});

			$('body').on('click', '.suaajax', function(event) {
				$(this).parent().addClass('hidden');
				$(this).parent().prev().removeClass('hidden');
				$(this).parent().prev().prev().addClass('hidden');
				

				event.preventDefault();
			});

			$('body').on('click', '.luuajax', function(event) {
				noidung = $(this).parent().prev().val();


				$(this).parent().parent().parent().parent().prev().removeClass('hidden');
				$(this).parent().parent().parent().parent().next().removeClass('hidden');
				$(this).parent().parent().parent().parent().addClass('hidden');
				$(this).parent().parent().parent().parent().prev().html(noidung);

				var duongdan = '<?php echo base_url(); ?>';

				$.ajax({
					url: duongdan + 'index.php/tin/updateDanhmuc',
					type: 'POST',
					dataType: 'json',
					data: {
						tendanhmuc: $(this).parent().prev().val(),
						id: $(this).parent().prev().prev().val()
					},
				})
				.done(function() {
					console.log("success");
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});
				

			});

		});
	</script>
</body>
</html>