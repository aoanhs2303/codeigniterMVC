<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class resize extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('resize_view');
	}

	public function resize_anh()
	{
		$config['upload_path'] = './hinhanh/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '10000';

		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('anh')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data = $this->upload->data();
			echo base_url() . 'hinhanh/' . $data['file_name'];

			//SEACH RESIZE IMAGE
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'hinhanh/'. $data['file_name']; // ko lay base_url
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width']         = 75;
			$config['height']       = 50;

			
			$this->load->library('image_lib', $config);
			$this->image_lib->initialize($config);
			$this->image_lib->resize();


		}
	}
}

/* End of file resize.php */
/* Location: ./application/controllers/resize.php */