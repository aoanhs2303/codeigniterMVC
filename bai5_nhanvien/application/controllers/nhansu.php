<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'UploadHandler.php';

class nhansu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('nhansu_model');
		$ketqua = $this->nhansu_model->getAllData();
	
		$ketqua = array("mangKQ" => $ketqua);

		//var_dump($ketqua);
		//truyen du lieu sang cho view;
		$this->load->view('nhansu_view', $ketqua, FALSE);

	}

	public function nhansu_add()
	{
		$ten 	= $this->input->post('ten');
		$tuoi 	= $this->input->post('tuoi');
		$sodh	= $this->input->post('sodonhang');
		$sodt 	= $this->input->post('sdt');
		$linkfb = $this->input->post('linkfb');

		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["anhavatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["anhavatar"]["tmp_name"]);
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
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["anhavatar"]["size"] > 500000) {
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
		    if (move_uploaded_file($_FILES["anhavatar"]["tmp_name"], $target_file)) {
		        //echo "The file ". basename( $_FILES["anhavatar"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}

		$anhavatar = base_url() . "uploads/" . basename($_FILES["anhavatar"]["name"]);

		//echo $anhavatar;

		//goi model
		$this->load->model('nhansu_model');
		$flag = $this->nhansu_model->insertDataToMySql($ten, $tuoi, $sodt, $anhavatar, $linkfb, $sodh);

		if($flag == false) {
			$this->load->view('insert_thanhcong_view');
		} else {
			echo "That bai";
		}

	}

	public function sua_nhansu($id)
	{
		$this->load->model('nhansu_model');
		$ketqua = $this->nhansu_model->getDataByID($id);
		
		$ketqua = array('editKQ' => $ketqua);
		//dua du lieu sang view
		$this->load->view('sua_nhansu_view', $ketqua, FALSE);
	}

	public function update_nhansu()
	{
		// lay du lieu tu viet
		$id = $this->input->post('id');
		
		$ten = $this->input->post('ten');
		$tuoi = $this->input->post('tuoi');
		$sodonhang = $this->input->post('sodonhang');
		$sodt = $this->input->post('sdt');
		$linkfb = $this->input->post('linkfb');

		//xu lieu upload anh
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["anhavatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["anhavatar"]["tmp_name"]);
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
		if ($_FILES["anhavatar"]["size"] > 500000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		// && $imageFileType != "gif" ) {
		//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		//     $uploadOk = 0;
		// }
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    //echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["anhavatar"]["tmp_name"], $target_file)) {
		        //echo "The file ". basename( $_FILES["anhavatar"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}

		//$anhavatar = base_url() . "uploads/" . basename($_FILES["anhavatar"]["name"]);
		$anhavatar = basename($_FILES["anhavatar"]["name"]);

		if($anhavatar) {
			$anhavatar = base_url() . "uploads/" . basename($_FILES["anhavatar"]["name"]);
		} else {
			$anhavatar = $this->input->post('anhavatar2');
		}

		//load model

		$this->load->model('nhansu_model');
		if($this->nhansu_model->editByID($id, $ten, $tuoi, $sodt, $anhavatar, $linkfb, $sodonhang) == false) {
			$this->load->view('insert_thanhcong_view');
		} 
	}

	public function xoa_nhansu($id)
	{
		$this->load->model('nhansu_model');
		if($this->nhansu_model->deleteByID($id) == false) {
			$this->load->view('insert_thanhcong_view');
		} else {
			echo "string";
		}

	}

	public function ajaxAdd()
	{
		$ten 	= $this->input->post('ten');
		$tuoi 	= $this->input->post('tuoi');
		$sodh	= $this->input->post('sodonhang');
		$sodt 	= $this->input->post('sdt');
		$linkfb = $this->input->post('linkfb');
		$anhavatar = $this->input->post('anhavatar');

		$this->load->model('nhansu_model');
		$flag = $this->nhansu_model->insertDataToMySql($ten, $tuoi, $sodt, $anhavatar, $linkfb, $sodh);

		if($flag == false) {
			echo "thanh cong";
		} else {
			echo "That bai";
		}
	}

	public function uploadFile()
	{
		$uploadfile = new UploadHandler;
	}
}

/* End of file nhansu.php */
/* Location: ./application/controllers/nhansu.php */