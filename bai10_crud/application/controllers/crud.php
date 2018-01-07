<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('crud_model');
	}

	// List all your items
	public function index( $offset = 0 )
	{
		$dk = array('level' => 2);
		$dl = $this->crud_model->get($dk);
		$this->load->view('crud_view');
	}

	// Add a new item
	public function add()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$password = md5($password);
		$level = $this->input->post('level');
		$mangdl = array('username' => $username, 'password' => $password, 'level' => $level);

		if($this->crud_model->insert($mangdl)) {
			$this->load->view('thanhcong');
		}
	}

	//Update one item
	public function update( $id = NULL )
	{
		$mangupdate = array('username' => 'Trần Như Lực', 'password' => md5('BLACKPINK'), 'level' => 10);
		$where = array('id' => 3);
		if($this->crud_model->update($mangupdate,$where)) {
			echo 'Update thành công';
		}
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$id = 1;
		// $dulieu = array('id' => $id);
		if($this->crud_model->delete($id)) {
			echo "Xóa thành công";
		}
	}
}

/* End of file crud.php */
/* Location: ./application/controllers/crud.php */
