<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tintuc extends CI_Controller {

	private $sotin;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tin_model');
		$this->sotin = 2;
	}

	public function index()
	{

		$dl = $this->tin_model->LoadDanhSachTin2();
		$sotrang = $this->tin_model->soTrang();
		$danhmuc = $this->tin_model->getDanhmuc();
		$dlHeader = $this->tin_model->layDulieuHeader();
		$dlHeader = json_decode($dlHeader,true);

		$mangdl = array('dulieutin' => $dl, 'sotrang' => $sotrang, 'danhmuc' => $danhmuc, 'dulieuheader' => $dlHeader);

		$this->load->view('news', $mangdl);	
		
	}

	public function page($page)
	{
		$dl = $this->tin_model->mottrang($page,$this->sotin);
		$sotrang = $this->tin_model->soTrang();
		$danhmuc = $this->tin_model->getDanhmuc();
		$dlHeader = $this->tin_model->layDulieuHeader();
		$dlHeader = json_decode($dlHeader,true);
		$mangdl = array('dulieutin' => $dl, 'sotrang' => $sotrang, 'danhmuc' => $danhmuc, 'dulieuheader' => $dlHeader);

		$this->load->view('news', $mangdl);
	}

	public function detail($id)
	{
		// $this->session->set_userdata('tensession','biến cố');

		$mangsession = array('user' => 'aoanhs2303', 'pass' => '123456');
		$this->session->set_userdata($mangsession);
		$this->session->unset_userdata('user');
		$dl = $this->tin_model->getTinById($id);
		$danhmuc = $this->tin_model->getDanhmuc();
		$iddanhmuc = $this->tin_model->getIDDMbyID($id);
		$tinlienquan = $this->tin_model->getTinLienQuan($iddanhmuc,$id);

		$mangdl = array('dulieutin' => $dl, 'danhmuc' => $danhmuc, 'tinlienquan' => $tinlienquan);

		$this->load->view('singlenews', $mangdl);
	}

	public function danhmuc($id)
	{
		$dl = $this->tin_model->loadTinDM($id);
		$sotrang = $this->tin_model->soTrang();
		$danhmuc = $this->tin_model->getDanhmuc();

		$mangdl = array('dulieutin' => $dl, 'sotrang' => $sotrang, 'danhmuc' => $danhmuc);

		$this->load->view('news', $mangdl);	
	}

	public function themDLHeader()
	{
		$dlHeader = array(
			'mangXH' => array(
				'linkFB' => 'http', 
				'linkTW' => 'http', 
				'linkP' => 'http', 
				'linkGP' => 'http' 
			),
			'soHotLine' => array(
				'textHotLine' => 'Gọi để đặt bàn',
				'sdt' => '0122 3232 213'
			),
			'gioMoCua' => array(
				'text' => 'Giờ mở cửa',
				'gio' => '9H - 20H'
			),
			'logo' => 'google.com'
		);
		$dlHeader = json_encode($dlHeader);
		if($this->tin_model->updateHeader($dlHeader)) {
			echo 'thành công';
		} else {
			echo "thất bại";
		}
	}

	public function quanLyHeader()
	{
		$dl = $this->tin_model->layDulieuHeader();
		
		$dl = json_decode($dl,true);
		$mangdl = array('dulieu' => $dl);
		$this->load->view('jsonheader_view', $mangdl);

	}

	public function suaHeader()
	{
		$linkFB = $this->input->post('linkFB');
		$linkTW = $this->input->post('linkTW');
		$linkP = $this->input->post('linkP');
		$linkGP = $this->input->post('linkGP');

		$textHotline = $this->input->post('textHotline');
		$sdt = $this->input->post('sdt');

		$textgio = $this->input->post('textgio');
		$gio = $this->input->post('gio');

		$logocu = $this->input->post('logocu');
		$logo = $_FILES['logo']['name'];

		if(empty($logo)) {
			$logo = $logocu;
		} else {
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["logo"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["logo"]["tmp_name"]);
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
			if ($_FILES["logo"]["size"] > 500000) {
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
			    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
			        echo "The file ". basename( $_FILES["logo"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}
			$logo = base_url() ."uploads/". basename($_FILES["logo"]["name"]);
		}
		$dlHeader = array(
			'mangXH' => array(
				'linkFB' => $linkFB, 
				'linkTW' => $linkTW, 
				'linkP' => $linkP, 
				'linkGP' => $linkGP 
			),
			'soHotLine' => array(
				'textHotLine' => $textHotline,
				'sdt' => $sdt
			),
			'gioMoCua' => array(
				'text' => $textgio,
				'gio' => $gio
			),
			'logo' => $logo
		);
		$dlHeader = json_encode($dlHeader);
		//goi model để cập nhập dữ liệu
		if($this->tin_model->updateHeader($dlHeader)) {
			echo 'Thành công';
		} else {
			echo 'Thất bại';
		}
	}
}

/* End of file tintuc.php */
/* Location: ./application/controllers/tintuc.php */