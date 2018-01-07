<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class upload extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('upload_view');
	}

	public function upload_file() // từ khóa upload + ctrl space
	{
		// $file = $_FILES['anh']['name'];
		// var_dump($file);
		$config['upload_path'] = './hinhanh/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '10000';
		// $config['max_width']  = '1024';
		// $config['max_height']  = '768';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('anh')){ //anh la name input
			$error = array('error' => $this->upload->display_errors());
			echo "<pre>";
			var_dump($error);
			echo "</pre>";
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$dulieuanh = $this->upload->data(); // chua du thu trong nay
			echo base_url().'hinhanh/'.$dulieuanh['file_name'];
		}
	}
}

/* End of file upload.php */
/* Location: ./application/controllers/upload.php */