<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class First_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$sdt['danhsachsdt'] = array('01223543841', '01222476383', '01224232712', '01222232322');
		$this->load->view('viewAA', $sdt);
		//view chi nhan truyen vao mang
	}

}

/* End of file First_controller.php */
/* Location: ./application/controllers/First_controller.php */