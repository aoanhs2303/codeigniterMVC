<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class json_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insertData($ten, $dulieu)
	{
		//tao ra mang dulieu
		$mangdl = array(
			'ten' 		=> $ten,
			'dulieu'	=> $dulieu
		);

		$this->db->insert('warehose', $mangdl);

		return $this->db->insert_id();
	}

	public function showData()
	{
		$this->db->select('*');
		$this->db->where('ten', 'contact');
		$dulieu = $this->db->get('warehose');
		$dulieu = $dulieu->result_array();

		foreach ($dulieu as $value) {
			$kq = $value['dulieu'];
		}
		return $kq;
	}

	public function updateData($dulieu)
	{
		$this->db->where('ten', 'contact');

		//tao mang luu tru du lieu
		$dulieu = array(
			'ten' => 'contact',
			'dulieu' => $dulieu 
		);	

		return $this->db->update('warehose', $dulieu);
	}

}

/* End of file json_model.php */
/* Location: ./application/models/json_model.php */