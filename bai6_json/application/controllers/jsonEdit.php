<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class jsonEdit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('json_model');
		$dl = $this->json_model->showData();
		$dl = json_decode($dl, true);
		$dl = array('mangdl' => $dl);

		$this->load->view('json_edit_view', $dl, FALSE);

		//var_dump($dl);
	}

	public function do_edit()
	{
		$ten = $this->input->post('ten'); // ten la cai mang luu tat ca ten
		$sdt = $this->input->post('sdt'); // sdt la mang luu toan bo sdt

		//tao json de luu du lieu lai
		$dl = array();

		for ($i=0; $i < count($ten); $i++) { 
			$trunggian = array();
			$trunggian['ten'] = $ten[$i];
			$trunggian['sdt'] = $sdt[$i];
			array_push($dl, $trunggian);

		}
		$dl = json_encode($dl);

		// var_dump($dl);

		$this->load->model('json_model');
		if($this->json_model->updateData($dl)) {
			$this->load->view('thanhcong_view');
		}

	}

}

/* End of file jsonEdit.php */
/* Location: ./application/controllers/jsonEdit.php */