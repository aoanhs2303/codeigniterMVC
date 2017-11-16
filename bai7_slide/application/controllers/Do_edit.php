<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Do_edit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		// lay du lieu tu csdl
		$this->load->model('slide_model');
		$dulieu = $this->slide_model->laydulieu();

		// bien json thanh mang
		$dulieu = json_decode($dulieu, true);
		
		$dulieu = array('mangdl' => $dulieu);

		// echo "<pre>";
		// var_dump($dulieu);		

		//truyen mang nay sang view editSlide_view	
		$this->load->view('editSlide_view', $dulieu, FALSE);
	}

}

/* End of file Do_edit.php */
/* Location: ./application/controllers/Do_edit.php */