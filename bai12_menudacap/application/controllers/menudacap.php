<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menudacap extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('menudacap_model');
	}

	// List all your items
	public function index( $offset = 0 )
	{
		$this->load->view('menudacap_view');
		
	}

	public function menu($menucha = 0) //Sài đệ quy để show ra menu
	{
		$this->db->select('*');
		$dulieu = $this->db->get('menudacap');
		$dulieu = $dulieu->result_array();
		$menucon = array();
		foreach ($dulieu as $key => $value) {
			if($value['menucha'] == $menucha) {
				array_push($menucon, $value);
			}
		}
		if($menucon) {
			echo "<ul>";
			foreach ($menucon as $key => $value) {
				echo "<li><a href='".$value['link']."'>".$value['tieude']."</a>";
				$this->menu($menucha=$value['id']);
				echo "</li>";
			}
			echo "</ul>";
		}
		
	}

	// Add a new item
	public function add()
	{
		$dulieu = array(
			'tieude' => $this->input->post('tieude'),
			'link' => $this->input->post('link'),
			'menucha' => $this->input->post('menucha')
		);

		if($this->menudacap_model->insert($dulieu)) {
			echo 'Thành công';
		}

	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file menudacap.php */
/* Location: ./application/controllers/menudacap.php */
