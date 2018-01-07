<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sim extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('addSim_view');
	}

	public function add()
	{
		$so = $this->input->post('so');
		$gia = $this->input->post('gia');
		$this->load->model('addSim_model');
		$this->addSim_model->addData($so, $gia);
	}

	public function show()
	{
		$this->load->model('addSim_model');
		$dulieu = $this->addSim_model->getData();
		$dulieu = array('mangdl' => $dulieu);

		$this->load->view('showSim_view', $dulieu, FALSE);
	}

	public function edit($id)
	{
		$this->load->model('addSim_model');

		$dl = $this->addSim_model->editById($id);
		$dl = array('mangdl' => $dl);

		$this->load->view('editSim_view', $dl, FALSE);
	}

	public function update()
	{
		$id = $this->input->post('id');
		$so = $this->input->post('so');
		$gia = $this->input->post('gia');

		$this->load->model('addSim_model');
		if($this->addSim_model->updateData($id, $so, $gia)) {
			$this->load->view('thanhcong_view');
		}
	}

	public function delete($id)
	{
		$this->load->model('addSim_model');
		if($this->addSim_model->deleteById($id)) {
			$this->load->view('thanhcong_view');
		}
	}

}

/* End of file Sim.php */
/* Location: ./application/controllers/Sim.php */