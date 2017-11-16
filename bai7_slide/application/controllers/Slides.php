<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slides extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('slide_model');
	}

	public function index()
	{
		$this->load->view('addData_view');
	}
	public function addSlide()
	{
		// lay du lieu tu truong slide
		$dulieu = $this->slide_model->laydulieu();
		//giai ma json
		$dulieu = json_decode($dulieu, true);
		
		if($dulieu == null) {
			$dulieu = array();
		}

		//lay du lieu


		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["slide_image"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["slide_image"]["tmp_name"]);
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
		 //   echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["slide_image"]["size"] > 500000) {
		   // echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		   // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		   // echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["slide_image"]["tmp_name"], $target_file)) {
		    //    echo "The file ". basename( $_FILES["slide_image"]["name"]). " has been uploaded.";
		    } else {
		    //    echo "Sorry, there was an error uploading your file.";
		    }
		}


		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$button_link = $this->input->post('button_link');
		$button_text = $this->input->post('button_text');
		$slide_image = base_url() . $target_file;

		//them noi dung vao json
		$motslideanh = array(
			'title' => $title,
			'description' => $description,
			'button_link' => $button_link,
			'button_text' => $button_text,
			'slide_image' => $slide_image
		);

		array_push($dulieu, $motslideanh);

		
		//ma hoa json

		$dulieu = json_encode($dulieu);

		var_dump($dulieu);
		// dua lieu moi vao, update lai du lieu
		$this->slide_model->updateDulieuSlide($dulieu);

	}

	public function suaSilde()
	{
		//lay ve noi dung
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$button_link = $this->input->post('button_link');
		$button_text = $this->input->post('button_text');

		//lay ve tat ca cac anh
		$cacanh = $_FILES['slide_image']['name']; // du tru ten file
		$filevatly = $_FILES['slide_image']['tmp_name']; // du tru file that

		

		//luu file cu neu khong uplaod moi
		$slide_image_old = $this->input->post('slide_image_old');

		//duyet mang de lay ten tung file
		$slide_image = array();
		for ($i=0; $i < count($cacanh); $i++) { 
			if(empty($cacanh[$i])) {
				$slide_image[$i] = $slide_image_old[$i];
			} else {
				$duongdan = 'uploads/'.$cacanh[$i];
				move_uploaded_file($filevatly[$i], $duongdan);
				$slide_image[$i] = base_url() . "uploads/" . $cacanh[$i];
			}
		}

		//tao mot mang moi "tatcaslide"
		$tatcaslide = array();

		//insert tung phan tu vao mang tatcaslide
		for ($i=0; $i < count($title); $i++) { 
			$tmp = array();
			$tmp['title'] 		= $title[$i];
			$tmp['description'] = $description[$i];
			$tmp['button_link'] = $button_link[$i];
			$tmp['button_text'] = $button_text[$i];
			$tmp['slide_image'] = $slide_image[$i];
			array_push($tatcaslide, $tmp);
		}

		//var_dump($tatcaslide);

		//dua thanh json
		$tatcaslide = json_encode($tatcaslide);

		//goi model update dulieu
		if($this->slide_model->updateDulieuSlide($tatcaslide)) {
			$this->load->view('thanhcong_view');
		} else {
			$this->load->view('thanhcong_view');
		}

	}

}

/* End of file Slides.php */
/* Location: ./application/controllers/Slides.php */