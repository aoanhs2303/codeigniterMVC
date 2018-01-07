<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SEO extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('seo_model');
	}

	// List all your items
	public function index( $offset = 0 )
	{
		//$this->load->view('seo_view');
		$dl = $this->seo_model->get();
		echo '<ul>';
		foreach ($dl as $key => $value) {
			echo '<li>';
			echo "<a href='";
			echo base_url().'tin/';
			echo $value['link'].'-';
			echo $value['id'];
			echo "'>";
			echo $value['tieude'];
			echo '</a>';
			echo '</li>';			
		}
		echo '</ul>';

	}
	public function detail($id, $link)
	{
		$dieukhien = array('id' => $id);
		$dl = $this->seo_model->get($dieukhien);


		echo "<h1>";
		echo $dl['tieude'];
		echo "</h1>";



		echo "<pre>";
		var_dump($dl);
		echo "</pre>";

		echo 'ID của tin là: ' . $id;
		echo '<br>';
		echo 'Link: ' . $link;
	}

	// Add a new item
	public function add()
	{
		$dulieu = array(
			'tieude' => $this->input->post('tieude'),
			'link' => $this->input->post('link'),
			'noidung' => $this->input->post('noidung')
		);
		$this->seo_model->insert($dulieu);
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
