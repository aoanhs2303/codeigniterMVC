<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
		$this->load->model('showData_model');
		//goi ham getDatabse() trong model
		$dulieu = $this->showData_model->getDatabase();

		$dulieu = array('dulieutucontroller' => $dulieu);

		$this->load->view('showData_view', $dulieu, FALSE);
	}

	public function deleteData($id)
	{
		$this->load->model('showData_model');
		if($this->showData_model->deleteDataById($id)) {
			$this->load->view('xoathanhcong');
		}
	}

	public function editSim($id)
	{
		$this->load->model('showData_model');

		$ketqua = $this->showData_model->editById($id);

		$ketqua = array('mangketqua' => $ketqua);

		//truyen $ketnay vao view de sua du lieu
		$this->load->view('editDta_view', $ketqua, FALSE);
	}

	public function updateData()
	{
		$id = $this->input->post('id');
		$so = $this->input->post('so');
		$gia = $this->input->post('gia');



		$this->load->model('showData_model');

		if($this->showData_model->updateDataByID($id, $so, $gia) == false) {
			echo "Thành công";
		} 
	}

}

/* End of file showData.php */
/* Location: ./application/controllers/showData.php */