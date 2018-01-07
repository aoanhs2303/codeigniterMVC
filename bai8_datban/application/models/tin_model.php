<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tin_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insert_danhmuc($tendanhmuc)
	{
		$ten = array('tendanhmuc' => $tendanhmuc);
		return $this->db->insert('danhmuctin', $ten);
	}

	public function getDanhmuc()
	{
		$this->db->select('*');
		$danhmuc = $this->db->get('danhmuctin');
		$danhmuc = $danhmuc->result_array();
		return $danhmuc;
	}

	public function getDataById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dl = $this->db->get('danhmuctin');
		return $dl = $dl->result_array();
	}
	public function updateData($id, $ten)
	{
		$dulieu = array('id' => $id, 'tendanhmuc' => $ten);
		$this->db->where('id', $id);
		return $this->db->update('danhmuctin', $dulieu);
	}
	public function deleteById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('danhmuctin');
	}

	public function insertTin($tieude,$iddanhmuc,$noidungtin,$anhtin,$trichdan)
	{
		$dulieu = array(
			'tieude' => $tieude,
			'iddanhmuc' => $iddanhmuc,
			'noidungtin' => $noidungtin,
			'anhtin' => $anhtin,
			'trichdan' => $trichdan
		);
		$this->db->insert('tintuc', $dulieu);

		return $this->db->insert_id();
	}

	public function loadDanhSachTin()
	{
		$this->db->select('*');
		$dl = $this->db->get('tintuc');
		$dl = $dl->result_array();
		return $dl;
	}

	public function updateTinById($id,$tieude,$iddanhmuc,$noidungtin,$anhtin,$trichdan)
	{
		$dulieusua = array(
			'id' => $id,
			'tieude' => $tieude,
			'iddanhmuc' => $iddanhmuc,
			'noidungtin' => $noidungtin,
			'anhtin' => $anhtin,
			'trichdan' => $trichdan
		);
		$this->db->where('id', $id);
		return $this->db->update('tintuc', $dulieusua);
	}

	public function getTinById($id)
	{
		$this->db->select('*');
		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left');
		$this->db->where('tintuc.id', $id);
		$ketqua = $this->db->get('danhmuctin');
		return $ketqua = $ketqua->result_array();
	}

	public function deleteTinById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		return $this->db->delete('tintuc');
	}

	public function loadDanhSachTin2()
	{
		$this->db->select('*');
		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left');
		$ketqua = $this->db->get('danhmuctin', 2, 0); // 2 là số tin mỗi trang & số 0 là 2 tin đầu 0 và 1
		return $ketqua = $ketqua->result_array();
	}

	public function soTrang()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('tintuc');
		$ketqua = $ketqua->result_array();

		return count($ketqua) / 2;
	}

	public function mottrang($trang, $sotin)
	{
		$offset = ($trang - 1) * $sotin;
		$this->db->select('*');
		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left');
		$ketqua = $this->db->get('danhmuctin', $sotin, $offset);
		return $ketqua = $ketqua->result_array();
	}

	public function loadTinDM($iddm)
	{
		$this->db->select('*');
		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left');
		$this->db->where('danhmuctin.id', $iddm);
		$ketqua = $this->db->get('danhmuctin');
		return $ketqua->result_array();
	}

	public function getIDDMbyID($id)
	{
		$this->db->select('*');
		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left');
		$this->db->where('tintuc.id', $id);
		$ketqua = $this->db->get('danhmuctin');
		$ketqua = $ketqua->result_array();
		$iddm = $ketqua[0]['iddanhmuc'];
		return $iddm;
	}

	public function getTinLienQuan($iddm, $id)
	{
		$this->db->select('*');
		$this->db->from('tintuc');
		$this->db->where('iddanhmuc', $iddm);
		$this->db->where('id !=', $id);
		$ketqua = $this->db->get();
		return $ketqua = $ketqua->result_array();;
	}

	public function updateHeader($dulieu)
	{
		$dl = array(
			'tenthuoctinh' => 'QuanLyHeader',
			'id' => '1',
			'json' => $dulieu
		);
		$this->db->where('tenthuoctinh', 'QuanLyHeader');
		return $this->db->update('dulieujson', $dl);
	}

	public function layDulieuHeader()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'QuanLyHeader');
		$dl = $this->db->get('dulieujson');
		$dl = $dl->result_array();
		return $dl[0]['json'];
	}
}

/* End of file tin_model.php */
/* Location: ./application/models/tin_model.php */