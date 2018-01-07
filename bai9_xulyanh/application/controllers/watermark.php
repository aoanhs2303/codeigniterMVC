<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class watermark extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('watermark_view');
	}
	public function watermark_anh()
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


			//WATERMARK
			$config['source_image'] = 'hinhanh/' . $data['file_name'];
			// $config['wm_text'] = 'Copyright 2006 - John Doe';
			// $config['wm_type'] = 'text';
			// $config['wm_font_path'] = './system/fonts/texb.ttf';
			// $config['wm_font_size'] = '16';
			// $config['wm_font_color'] = 'ffffff';
			// $config['wm_vrt_alignment'] = 'bottom';
			// $config['wm_hor_alignment'] = 'center';
			// $config['wm_padding'] = '20';

			$config['wm_type'] = 'overlay';
			$config['wm_overlay_path'] = 'hinhanh/logo.png';
			$config['wm_vrt_alignment'] = 'bottom';
			$config['wm_hor_alignment'] = 'center';

			$this->load->library('image_lib',$config);
			$this->image_lib->initialize($config);

			$this->image_lib->watermark();
		}
	}
}

/* End of file watermark.php */
/* Location: ./application/controllers/watermark.php */