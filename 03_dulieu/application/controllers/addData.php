<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('addData_view');
	}

	public function insertData_controller()
	{
		$so = $this->input->post('so');
		$gia = $this->input->post('gia');
		$this->load->model('addData_model');
		
		if($this->addData_model->insert($so, $gia)){
			$this->load->view('thanhcong');
		}

		
	}
}

/* End of file addData.php */
/* Location: ./application/controllers/addData.php */