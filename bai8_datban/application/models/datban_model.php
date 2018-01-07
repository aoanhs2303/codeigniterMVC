<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class datban_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function booking($tenkh, $email, $sdt, $ngaydatban, $giodatban, $songuoi)
	{
		$dulieu = array(
			'tenkh' => $tenkh,
			'email' => $email,
			'sdt'	=> $sdt,
			'ngaydatban' => $ngaydatban,
			'giodatban'	=> $giodatban,
			'songuoi'	=> $songuoi,
		);
		return $this->db->insert('songuoi', $dulieu);
	}

}

/* End of file datban_model.php */
/* Location: ./application/models/datban_model.php */