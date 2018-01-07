<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tin_model');
	}

	public function index()
	{
		
	}

	public function danhmuctin()
	{
		$dulieu = $this->tin_model->getDanhmuc();
		$dulieu = array('ketqua' => $dulieu);
		$this->load->view('danhmuc_view', $dulieu, FALSE);
	}

	public function themdanhmuc()
	{
		$tendm = $this->input->post('tendanhmuc');
		$this->load->model('tin_model');
		if($this->tin_model->insert_danhmuc($tendm)){
			$this->load->view('thanhcong');
		} else {
			echo "thất cmn bại";
		}
	}

	public function suadanhmuc($iddanhmuc)
	{
		$dl = $this->tin_model->getDataById($iddanhmuc);
		$dl = array('mangDL' => $dl);
		$this->load->view('suatendanhmuc_view', $dl, FALSE);
	}

	public function xoadanhmuc($id)
	{
		if($this->tin_model->deleteById($id)) {	
			$this->load->view('thanhcong');
			//Xử lý nếu nếu trong danh mục có bài viết thì chuyển qua danh mục "Chưa phân loại"
			// $tinDM = $this->tin_model->getTinbyIDDM();


		} else {
			echo "thất bại";
		}
	}

	public function updateDanhmuc()
	{
		$id = $this->input->post('id');
		$tendanhmuc = $this->input->post('tendanhmuc');

		if($this->tin_model->updateData($id, $tendanhmuc)){
			$this->load->view('thanhcong');
		} else {
			echo "thất bại";
		}
	}
	public function addJquery()
	{
		$tendm = $this->input->post('tendanhmuc');
		$this->tin_model->insert_danhmuc($tendm);
		echo json_encode($this->db->insert_id());
	}

	public function quanlytin()
	{
		$dm = $this->tin_model->getDanhmuc();
		$tin = $this->tin_model->loadDanhSachTin();

		$dulieu = array('danhmuc' => $dm, 'tin' => $tin);
		$this->load->view('tin_view', $dulieu);
	}

	public function themmoitin()
	{
		$tieude = $this->input->post('tieude');
		$iddanhmuc = $this->input->post('iddanhmuc');
		$noidungtin = $this->input->post('noidungtin');
		$trichdan = $this->input->post('trichdan');

		/*ẢNH TIN*/
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["anhtin"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["anhtin"]["tmp_name"]);
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
		    if (move_uploaded_file($_FILES["anhtin"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["anhtin"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}

		$anhtin = base_url() ."uploads/". basename($_FILES["anhtin"]["name"]);

		if($this->tin_model->insertTin($tieude,$iddanhmuc,$noidungtin,$anhtin,$trichdan)) {
			$this->load->view('thanhcong2');
		} else {

		}
	}
	public function suatin($id)
	{
		$ketqua = $this->tin_model->getTinById($id);
		$danhmuc = $this->tin_model->getDanhmuc();
		$dulieu = array('dulieusua' => $ketqua,'danhmuc' => $danhmuc);
		$this->load->view('suatin_view', $dulieu);
	}

	public function luutindasua()
	{
		$anhtincu = $this->input->post('anhtincu');
		$anhtin  = $_FILES['anhtin']['name'];
		if(empty($anhtin)){
			$anhtin = $anhtincu;
		} else {
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["anhtin"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["anhtin"]["tmp_name"]);
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
			    if (move_uploaded_file($_FILES["anhtin"]["tmp_name"], $target_file)) {
			        echo "The file ". basename( $_FILES["anhtin"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}

			$anhtin = base_url() ."uploads/". basename($_FILES["anhtin"]["name"]);

		}

		$id = $this->input->post('id');
		$tieude = $this->input->post('tieude');
		$iddanhmuc = $this->input->post('iddanhmuc');
		$noidungtin = $this->input->post('noidungtin');
		$trichdan = $this->input->post('trichdan');

		if($this->tin_model->updateTinById($id,$tieude,$iddanhmuc,$noidungtin,$anhtin,$trichdan)){
			$this->load->view('thanhcong2');
		}

	}

	public function xoatin($id)
	{
		if($this->tin_model->deleteTinById($id)) {
			$this->load->view('thanhcong2');
		}
	}
}

/* End of file Tin.php */
/* Location: ./application/controllers/Tin.php */