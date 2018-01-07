<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class crop extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('crop_view');
	}

	public function crop_anh()
	{
		$config['upload_path'] = './hinhanh/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '100000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('anh')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data = $this->upload->data();
			echo base_url() . 'hinhanh/' . $data['file_name'];

			$config['image_library'] = 'gd2';
			$config['source_image'] = 'hinhanh/'. $data['file_name']; // ko lay base_url
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
							$config['master_dim'] = 'height';
			$config['width']         = 200;
			$config['height']       = 200;

			$this->load->library('image_lib', $config);
			$this->image_lib->initialize($config);

			if($this->image_lib->resize()){
				$config['image_library'] = 'gd2';
				$config['source_image'] = 'hinhanh/'. $data['raw_name'] . '_thumb' . $data['file_ext']; 
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = FALSE;
				$config['master_dim'] = 'height';
				$config['width']         = 200;
				$config['height']       = 200;

				
				$this->load->library('image_lib', $config);
				$this->image_lib->initialize($config);
				$this->image_lib->crop();				
			}



		}
	}

}

/* End of file crop.php */
/* Location: ./application/controllers/crop.php */