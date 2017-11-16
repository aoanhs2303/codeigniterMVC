<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app01_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo "CONTROLLER --------->";
		$this->load->view('app01_view');
	}

}

/* End of file app01_controller.php */
/* Location: ./application/controllers/app01_controller.php */