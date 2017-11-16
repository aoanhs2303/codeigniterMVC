<!DOCTYPE html>
<html lang="en">

<head>
    <title> Nhân sự </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>vendor/angular.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/angular-route.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>main.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?> style.css">
</head>
<style>
  .crop {
    padding-top: 5px;
    height: 200px;
    width: 200px;
    overflow: hidden;
  }
</style>
<body>

    <div class="container">

        <hr>
        <div class="row mt-3">
            <div class="container">
                <div class="text-center">
                    <h3 class="display-3">Sửa nhân sự</h3>
                </div>
            </div>
            <form class="m-auto" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/nhansu/update_nhansu">
                <?php foreach ($editKQ as $key => $value) { ?>
                <div class="row mb-3">
                  <div class="col-4 push-sm-4">
                    <img src="<?php echo $value['anhavatar'] ?>" alt="" class="img-fluid">
                  </div>
                </div>
                <input type="hidden" id="id" name="id" value="<?php echo $value['id'] ?>">
                <input type="hidden" id="anhavatar2" name="anhavatar2" value="<?php echo $value['anhavatar'] ?>">
                <div class="form-group row">

                  <label for="anhavatar" class="col-3 col-form-label text-xs-right">Ảnh đại diện</label>
                  <div class="col-9">
                    
                    <input class="form-control" type="file" name="anhavatar" id="anhavatar">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="ten" class="col-3 col-form-label text-xs-right">Tên nhân viên</label>
                  <div class="col-9">
                    <input class="form-control" type="text" name="ten" id="ten" value="<?php echo $value['ten'] ?>">
                  </div>
                </div>
                
                <div class="row">
                    <div class="col-6">
                         <div class="form-group row">
                          <label for="tuoi" class="col-4 col-form-label text-xs-right">Tuổi</label>
                          <div class="col-8">
                            <input class="form-control" type="number" name="tuoi" id="tuoi" value="<?php echo $value['tuoi'] ?>">
                          </div>
                        </div>   
                    </div>
                    <div class="col-6">
                         <div class="form-group row">
                          <label for="sdt" class="col-3 col-form-label text-xs-right">SĐT</label>
                          <div class="col-9">
                            <input class="form-control" type="text" name="sdt" id="sdt" value="<?php echo $value['sdt'] ?>">
                          </div>
                        </div>   
                    </div>
                </div>


                <div class="row">
                    <div class="col-6">
                         <div class="form-group row">
                          <label for="sodonghang" class="col-3 col-form-label text-xs-right">Số đơn hàng</label>
                          <div class="col-9">
                            <input class="form-control" type="text" name="sodonhang" id="sodonghang" value="<?php echo $value['sodonhang'] ?>">
                          </div>
                        </div>
                    </div>
                    <div class="col-6">
                         <div class="form-group row">
                          <label for="linkfb" class="col-3 col-form-label text-xs-right">Facebook</label>
                          <div class="col-9">
                            <input class="form-control" type="text" name="linkfb" id="linkfb" value="<?php echo $value['linkfb'] ?>">
                          </div>
                        </div>   
                    </div>
                </div>
              <?php } ?>

                
        
                <input type="submit" class="btn btn-success" value="Lưu">
            </form>
        </div>
    </div>
</body>

</html>
