<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class json extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('json_model');
	}

	public function index()
	{
		
		$motcontact = array(
			'ten' => "luc",
			'sdt' => '0122345488'
		);

		$caccontact = array();
		array_push($caccontact, $motcontact);

		$motcontact2 = array(
			'ten' => "luc3",
			'sdt' => '0122345488322'
		);

		array_push($caccontact, $motcontact2);	

		//ma hoa $cacontact thanh json
		$noidung = json_encode($caccontact);

		// echo "day la kieu json --> enncode";
		// echo '<pre>';
		// var_dump($noidung);
		// echo '</pre>';

		// //sau do insert vao du lieu
		// //sau do lay du lieu ra thi dung ham json_decode

		// echo "day la kieu array --> json_decode";
		// echo '<pre>';
		// var_dump(json_decode($noidung));
		// echo '</pre>';

		//goi model de insert du lieu

		// $this->load->model('json_model');
		//$this->json_model->insertData('contact', $noidung);

		
		$ketqua = $this->json_model->showData();
		//giai ma json
		$ketqua = json_decode($ketqua); // tra ve array
		$ketqua = array('mangketqua' => $ketqua);


		$this->load->view('json_view', $ketqua, FALSE);

		// var_dump($ketqua);


	}

	public function xoa_json($sdt) 
	{
		//lay due lieu ra
		//sử dùng showData
		$dulieu = $this->json_model->showData();
	
		$dulieu = json_decode($dulieu); //bien thanh mang du lieu

		//duyet tung phan tu trong mang so sanh co phan tu nao có sdt trùng với $sdt
		//neu trung thi unset no

		foreach ($dulieu as $key => $value) {
			if($value->sdt == $sdt) {
				unset($dulieu[$key]);

			}
		}


		$dulieu = json_encode($dulieu); // bien mang -> json

		if($this->json_model->updateData($dulieu)) {
			$this->load->view('thanhcong_view');
		} else {

		}
	}

	public function do_add()
	{
		//lay du lieu tu view
		$ten = $this->input->post('ten');
		$sdt = $this->input->post('sdt');

		//lay ra du lieu json ra bang ham showData
		$dulieu = $this->json_model->showData();
		//gia ma du lieu thanh array
		$dulieu = json_decode($dulieu, true);
		//tao phan tu con
		$con = array('ten' => $ten, 'sdt' => $sdt);
		//dua phan tu con vao mang du lieu
		array_push($dulieu, $con);

		var_dump($dulieu);

		//goi function trong model
		$this->json_model->insertData($ten, $sdt);

		//ma hoi thanh json goi model
		$dulieu = json_encode($dulieu);
		//$this->json_model->updateData($dulieu);
		if($this->json_model->updateData($dulieu)) {
			$this->load->view('thanhcong_view');
		} 
	}


}

/* End of file json.php */
/* Location: ./application/controllers/json.php */