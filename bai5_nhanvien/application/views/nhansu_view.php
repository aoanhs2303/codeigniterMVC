<!DOCTYPE html>
<html lang="en">

<head>
    <title> Nhân sự </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jquery upload -->
    <script type="text/javascript" src="<?php echo base_url(); ?>jqueryupload/js/vendor/jquery.ui.widget.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>jqueryupload/js/jquery.iframe-transport.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>jqueryupload/js/jquery.fileupload.js"></script>

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
        <div class="text-center">
            <h3 class="display-3">Danh sách nhân viên</h3>
        </div>
    </div>
    <div class="container">
        <div class="row danhsach">
            <?php foreach ($mangKQ as $key => $value)  { ?>
              <div class="col-4" style="padding: 10px;">
                <div class="card" style="width: 20rem;">
                  <img class="card-img-top img-fluid crop m-auto" src="<?php echo $value['anhavatar'] ?>" alt="Card image cap">
                  <div class="card-block">
                    <h4 class="card-title ten">Name: <?php echo $value['ten'] ?></h4>
                    <p class="card-text tuoi">Tuoi: <span class="badge badge-primary"><?php echo $value['tuoi'] ?></span></p>
                    <p class="card-text sdt">Tel: <?php echo $value['sdt'] ?></p>
                    
                    <p class="card-text sodonghang">Số đơn hàng đã hoàn thiện: <?php echo $value['sodonhang'] ?></p>
                    <p class="card-text linkfb"><a href="<?php echo $value['linkfb'] ?>" class="btn btn-sm btn-primary">Facebook</a></p>

                    <span class="card-text editns"><a href="<?php echo base_url(); ?>index.php/nhansu/sua_nhansu/<?php echo $value['id'] ?>" class="btn btn-sm btn-success">Sửa nội dung</a></span>
                    <span class="card-text xoans"><a href="<?php echo base_url(); ?>index.php/nhansu/xoa_nhansu/<?php echo $value['id'] ?>" class="btn btn-sm btn-danger">Xóa</a></span>
                  </div>
                </div> <!-- card -->   
              </div>   
            <?php } ?>

            

        </div> <!-- row -->
        <hr>
        <div class="row mt-3">
            <div class="container">
                <div class="text-center">
                    <h3 class="display-3">Thêm mới nhân viên</h3>
                </div>
            </div>
            <!-- <form class="m-auto" method="post" enctype="multipart/form-data" action="<?php //echo base_url(); ?>index.php/nhansu/nhansu_add"> -->
                <div class="form-group row">
                  <label for="anhavatar" class="col-3 col-form-label text-xs-right">Ảnh đại diện</label>
                  <div class="col-9">
                    <input class="form-control" type="file" name="files[]" id="anhavatar">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="ten" class="col-3 col-form-label text-xs-right">Tên nhân viên</label>
                  <div class="col-9">
                    <input class="form-control" type="text" name="ten" id="ten">
                  </div>
                </div>
                
                <div class="row">
                    <div class="col-6">
                         <div class="form-group row">
                          <label for="tuoi" class="col-4 col-form-label text-xs-right">Tuổi</label>
                          <div class="col-8">
                            <input class="form-control" type="number" name="tuoi" id="tuoi">
                          </div>
                        </div>   
                    </div>
                    <div class="col-6">
                         <div class="form-group row">
                          <label for="sdt" class="col-3 col-form-label text-xs-right">SĐT</label>
                          <div class="col-9">
                            <input class="form-control" type="text" name="sdt" id="sdt">
                          </div>
                        </div>   
                    </div>
                </div>


                <div class="row">
                    <div class="col-6">
                         <div class="form-group row">
                          <label for="sodonghang" class="col-3 col-form-label text-xs-right">Số đơn hàng</label>
                          <div class="col-9">
                            <input class="form-control" type="text" name="sodonhang" id="sodonhang">
                          </div>
                        </div>
                    </div>
                    <div class="col-6">
                         <div class="form-group row">
                          <label for="linkfb" class="col-3 col-form-label text-xs-right">Facebook</label>
                          <div class="col-9">
                            <input class="form-control" type="text" name="linkfb" id="linkfb">
                          </div>
                        </div>   
                    </div>
                </div>


                
        
                <input type="submit" class="btn btn-success nutajax" value="Thêm">
            <!-- </form> -->
        </div>
    </div>
    <script>
      duongdan = '<?php echo base_url(); ?>';

      $('#anhavatar').fileupload({
        url: duongdan + 'index.php/nhansu/uploadFile',
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                tenfile = file.url;
            });
        }
      });

        


      $('.nutajax').click(function() { // xu lieu du lieu
        $.ajax({
        url: 'nhansu/ajaxAdd',
        type: 'POST',
        dataType: 'json',
        data: {
          ten: $('#ten').val(),
          tuoi: $('#tuoi').val(),
          sdt: $('#sdt').val(),
          anhavatar: tenfile,
          linkfb: $('#linkfb').val(),
          sodonhang: $('#sodonhang').val()
        },
        })
        .done(function() {
          console.log("success");
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() { // xu lieu giao dien
          console.log("complete");
          noidung = `<div class="col-4" style="padding: 10px;">
                      <div class="card" style="width: 20rem;">
                        <img class="card-img-top img-fluid crop m-auto" src="`tenfile`" alt="Card image cap">
                        <div class="card-block">
                          <h4 class="card-title ten">Name: ` + $('#ten').val()+ `</h4>
                          <p class="card-text tuoi">Tuoi: <span class="badge badge-primary">` + $('#tuoi').val()+ `</span></p>
                          <p class="card-text sdt">Tel: ` + $('#sdt').val()+ `</p>
                          
                          <p class="card-text sodonghang">Số đơn hàng đã hoàn thiện: ` + $('#sodonhang').val()+ `</p>
                          <p class="card-text linkfb"><a href="` + $('#linkfb').val()+ `" class="btn btn-sm btn-primary">Facebook</a></p>

                          <span class="card-text editns"><a href="<?php echo base_url(); ?>index.php/nhansu/sua_nhansu/<?php echo $value['id'] ?>" class="btn btn-sm btn-success">Sửa nội dung</a></span>
                          <span class="card-text xoans"><a href="<?php echo base_url(); ?>index.php/nhansu/xoa_nhansu/<?php echo $value['id'] ?>" class="btn btn-sm btn-danger">Xóa</a></span>
                        </div>
                      </div> <!-- card -->   
                    </div>  `

              $('.danhsach').append(noidung)

              $('#ten').val('')
              $('#tuoi').val('')
              $('#sdt').val('')
              // anhavatar: $('#ten').val(),
              $('#linkfb').val('')
              $('#sodonhang').val('')
        }); 
      })


      
      
    </script>
</body>

</html>
