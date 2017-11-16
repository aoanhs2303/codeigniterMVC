<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getDatabase()
	{
		$this->db->select('*'); // ;lay het du lieu
		$ketqua = $this->db->get('sim'); //tu bang sim

		//dua $ketqua thanh mang du lieu
		$ketqua = $ketqua->result_array();
		//var_dump($ketqua);

		return $ketqua;
	}

	public function deleteDataById($id) 
	{
		$this->db->where('id', $id);

		return $this->db->delete('sim');
	}

	public function editById($id)	
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dulieu = $this->db->get('sim');
		$dulieu = $dulieu->result_array();
		// die($dulieu);
		 //var_dump($dulieu);

		return $dulieu;
	}

	public function updateDataByID($id, $so, $gia)
	{
		$dulieuUpdate = array(
			'id' 	=> $id,
			'so' 	=> $so,
			'gia' 	=> $gia
		);

		$this->db->where('id', $id);

		$this->db->update('sim', $dulieuUpdate);
	}
}

/* End of file showData_model.php */
/* Location: ./application/models/showData_model.php */