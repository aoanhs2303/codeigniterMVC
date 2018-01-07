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
    <div class="row danhsach">
    <?php foreach ($mangDL as $key => $value)  { ?>
      <div class="col-4" style="padding: 10px;">
        <div class="card" style="width: 20rem;">
          <img class="card-img-top img-fluid crop m-auto" src="<?php echo $value['avatar'] ?>" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title ten">Name: <?php echo $value['ten'] ?></h4>
            <p class="card-text tuoi">Tuoi: <span class="badge badge-primary"><?php echo $value['tuoi'] ?></span></p>
            <p class="card-text luong">Salary: <?php echo $value['luong'] ?></p>
            
            <span class="card-text editns"><a href="<?php echo base_url(); ?>index.php/nhanvien/edit/<?php echo $value['id'] ?>" class="btn btn-sm btn-success">Sửa nội dung</a></span>
            <span class="card-text xoans"><a href="<?php echo base_url(); ?>index.php/nhanvien/delete/<?php echo $value['id'] ?>" class="btn btn-sm btn-danger">Xóa</a></span>
          </div>
        </div> <!-- card -->   
      </div>   
    <?php } ?>

            

        </div> <!-- row -->
  </div>





  <div class="container">
        <hr>
 
            <div class="container">
                <div class="text-center">
                    <h3 class="display-3">Thêm mới nhân viên</h3>
                </div>
            </div>
            <!-- <form class="m-auto" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/nhanvien/addNhanVien"> -->
              <div class="row">
                <div class="col-6">
                  <div class="form-group row">
                    <label for="avatar" class="col-4 col-form-label text-xs-right">Ảnh đại diện</label>
                    <div class="col-8">
                      <input class="form-control" type="file" name="avatar" id="avatar">
                    </div>
                  </div>  
                </div>
                <div class="col-6">
                  <div class="form-group row">
                    <label for="ten" class="col-3 col-form-label text-xs-right">Tên nhân viên</label>
                    <div class="col-9">
                      <input class="form-control" type="text" name="ten" id="ten">
                    </div>
                  </div>  
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
                          <label for="sdt" class="col-3 col-form-label text-xs-right">Lương</label>
                          <div class="col-9">
                            <input class="form-control" type="text" name="luong" id="luong">
                          </div>
                        </div>   
                    </div>
                </div>



                <div class="row pull-right">
                  <input type="submit" class="btn btn-success nutajax" value="Thêm">  
                </div>
        
              
            <!-- </form> -->

    </div>

  <script>
    $('.nutajax').click(function(event) {
      $.ajax({
        url: 'nhanvien/addajax',
        type: 'POST',
        dataType: 'json',
        data: {
          ten: $('#ten').val(),
          tuoi: $('#tuoi').val(),
          avatar: 'https://www.sourcecodester.com/sites/default/files/images/keytech/thumnail-jquery-ajax.png',
          luong: $('#luong').val()
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
          content = `<div class="col-4" style="padding: 10px;">
                    <div class="card" style="width: 20rem;">
                      <img class="card-img-top img-fluid crop m-auto" src="https://www.sourcecodester.com/sites/default/files/images/keytech/thumnail-jquery-ajax.png" alt="Card image cap">
                      <div class="card-block">
                        <h4 class="card-title ten">Name: ` + $('#ten').val() + `</h4>
                        <p class="card-text tuoi">Tuoi: <span class="badge badge-primary">` + $('#tuoi').val() + `</span></p>
                        <p class="card-text luong">Salary: ` + $('#luong').val() + `</p>
                        
                        <span class="card-text editns"><a href="<?php echo base_url(); ?>index.php/nhanvien/edit/<?php echo $value['id'] ?>" class="btn btn-sm btn-success">Sửa nội dung</a></span>
                        <span class="card-text xoans"><a href="<?php echo base_url(); ?>index.php/nhanvien/delete/<?php echo $value['id'] ?>" class="btn btn-sm btn-danger">Xóa</a></span>
                      </div>
                    </div> <!-- card -->   
                  </div>   `

        $('.danhsach').append(content)

        $('#ten').val('')
        $('#tuoi').val('')
        $('#sdt').val('')

        }); 
      })
  </script>
</body>

</html>


        