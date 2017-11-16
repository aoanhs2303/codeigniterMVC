<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addSim_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function addData($so, $gia)
	{
		$dulieu = array('so' => $so, 'gia' => $gia);
		if($this->db->insert('sim_lamlai', $dulieu)) {
			$this->load->view('thanhcong_view');
		}
	}

	public function getData()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('sim_lamlai');
		$ketqua = $ketqua->result_array();

		return $ketqua;
	}

	public function editById($id) // tra ve du lieu co id
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dulieu = $this->db->get('sim_lamlai');
		$dulieu = $dulieu->result_array();

		return $dulieu;
	}

	public function updateData($id, $s, $g)
	{
		$dulieu = array('so' => $s, 'gia' => $g);
		$this->db->where('id', $id);
		$this->db->update('sim_lamlai', $dulieu);

	}

	public function deleteById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('sim_lamlai');
	}
}

/* End of file addSim_model.php */
/* Location: ./application/models/addSim_model.php */