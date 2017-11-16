<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nhansu_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insertDataToMySql($ten, $tuoi, $sodt, $avatar, $linkfb, $sodh)
	{
		$dulieu = array(
			'ten' 			=> $ten, 
			'tuoi'			=> $tuoi,
			'sdt'			=> $sodt,
			'anhavatar'		=> $avatar,
			'linkfb'		=> $linkfb,
			'sodonhang'	=> $sodh
		);

		$this->db->insert('nhan_vien', $dulieu);
	}

	public function getAllData()
	{
		$this->db->select('*');
		$this->db->order_by('id', 'asc');
		$dulieu = $this->db->get('nhan_vien');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}

	public function getDataByID($id) 
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dulieu = $this->db->get('nhan_vien');
		$dulieu = $dulieu->result_array();
		//var_dump($dulieu);

		return $dulieu;
	}

	public function editByID($id, $ten, $tuoi, $sdt, $anhavatar, $linkfb, $sodonhang)
	{
		//dong goi cac bien thanh mang
		$data = array(
			'id' 		=> $id,
			'ten' 		=> $ten,
			'tuoi'		=> $tuoi,
			'sdt'		=> $sdt,
			'anhavatar'	=> $anhavatar,
			'linkfb'	=> $linkfb,
			'sodonhang'		=> $sodonhang
		);

		$this->db->where('id', $id);

		$this->db->update('nhan_vien', $data);
	}

	public function deleteByID($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('nhan_vien');
	}

}

/* End of file nhansu_model.php */
/* Location: ./application/models/nhansu_model.php */