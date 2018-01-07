<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class excel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('excel_model');
	}

	public function index()
	{
		$dl = $this->excel_model->get();
		$dulieu = array('dulieu' => $dl);
		$this->load->view('excel_view', $dulieu);
	}

}

/* End of file excel.php */
/* Location: ./application/controllers/excel.php */