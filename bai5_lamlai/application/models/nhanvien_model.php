<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nhanvien_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function addNhanVien($ten, $tuoi, $avatar, $luong)
	{
		$nhanvien = array(
			'ten' 		=> $ten,
			'tuoi'		=> $tuoi,
			'avatar'	=> $avatar,
			'luong'		=> $luong
		);
		$this->db->insert('nhan_vien_lam_lai', $nhanvien);
	}

	public function getData()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('nhan_vien_lam_lai');
		$ketqua = $ketqua->result_array();
		
		return $ketqua;
	}

	public function deleteById($id) 
	{
		$this->db->where('id', $id);
		return $this->db->delete('nhan_vien_lam_lai');
	}

	public function editById($id) // chi lay du lieu roi truyen vao cho view edit
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dulieu = $this->db->get('nhan_vien_lam_lai');
		$dulieu = $dulieu->result_array();

		return $dulieu;
	}

	public function updateID($id, $ten, $tuoi, $avatar, $luong)
	{
		$dulieuUpdate = array(
			'ten' 		=> $ten,
			'tuoi'		=> $tuoi,
			'avatar'	=> $avatar,
			'luong'		=> $luong
		);

		$this->db->where('id', $id);
		return $this->db->update('nhan_vien_lam_lai', $dulieuUpdate);
	}

}

/* End of file nhanvien_model.php */
/* Location: ./application/models/nhanvien_model.php */