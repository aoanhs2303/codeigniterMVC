<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slide_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function laydulieu()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'slides_topbanner');
		$dl = $this->db->get('homepageattr');
		$dl = $dl->result_array();

		foreach ($dl as $value) {
			$temp = $value['giatrithuoctinh'];
		}

		return $temp;
	}

	public function updateDulieuSlide($dulieucanupdate)
	{
		$dulieu = array(
			'tenthuoctinh' 	=> 'slides_topbanner',
			'giatrithuoctinh'  	=> $dulieucanupdate
		);
		$this->db->where('tenthuoctinh', 'slides_topbanner');
		$this->db->update('homepageattr', $dulieu);
	}
}

/* End of file slide_model.php */
/* Location: ./application/models/slide_model.php */