<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nhanvien extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('nhanvien_model');
		$dulieu = $this->nhanvien_model->getData();
		$dulieu = array('mangDL' => $dulieu);

		$this->load->view('nhanvien_view', $dulieu, FALSE);		
		
	}

	public function addNhanVien()
	{
		// $avatar = 'http://static2.yan.vn/YanNews/2167221/201703/20170322-065426-14900878046142-sao-1-_600x399.jpg';

		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["avatar"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}

		// Check file size
		if ($_FILES["avatar"]["size"] > 500000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
		        $avatar = base_url() . "uploads/" . basename( $_FILES["avatar"]["name"]);
		        echo $avatar;
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}




		$ten = $this->input->post('ten');
		$tuoi = $this->input->post('tuoi');
		$luong = $this->input->post('luong');

		$this->load->model('nhanvien_model');
		$this->nhanvien_model->addNhanVien($ten, $tuoi, $avatar, $luong);
	}

	public function delete($id)
	{
		$this->load->model('nhanvien_model');
		$this->nhanvien_model->deleteById($id);
	}

	public function edit($id) 
	{
		$this->load->model('nhanvien_model');
		$dulieu = $this->nhanvien_model->editById($id);
		$dulieu = array('mangDL' => $dulieu);
		$this->load->view('sua_nhanvien_view', $dulieu, FALSE);
	}

	public function update()
	{
		$id = $this->input->post('id');
		$ten = $this->input->post('ten');
		$tuoi = $this->input->post('tuoi');
		$luong = $this->input->post('luong');

		//lay anh
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["avatar"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    //echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["avatar"]["size"] > 500000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    //echo "Sorry, your file was not uploaded.";
		    $avatar = $this->input->post('avatar2');
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
		        $avatar = base_url() . "uploads/" . basename( $_FILES["avatar"]["name"]);
		        echo $avatar;
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}

		$this->load->model('nhanvien_model');
		$this->nhanvien_model->updateID($id, $ten, $tuoi, $avatar, $luong);
	}

	public function addajax()
	{
		

		$avatar = $this->input->post('avatar');
		$ten = $this->input->post('ten');
		$tuoi = $this->input->post('tuoi');
		$luong = $this->input->post('luong');

		$this->load->model('nhanvien_model');
		$this->nhanvien_model->addNhanVien($ten, $tuoi, $avatar, $luong);
	}


}

/* End of file nhansu.php */
/* Location: ./application/controllers/nhansu.php */