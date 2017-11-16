<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('slide_model');
		$dl = $this->slide_model->laydulieu();
		$dl = array('mangdl' => $dl);

		$this->load->view('trangchu', $dl);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */