<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class phantrang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('crud_model');
	}

	public function index($offset = 0)
	{
		$tongso = $this->crud_model->tatcadulieu();
		$dulieutrong1trang = 2;

		$dl = $this->crud_model->get2(2,$offset);

		$dulieu = array('dulieu' => $dl);
		
		$this->load->library('pagination');
		
		$config['base_url'] = base_url().'phantrang/index';
		$config['total_rows'] = $tongso;
		$config['per_page'] = $dulieutrong1trang;
		$config['uri_segment'] = 0; // lấy từ phần tử đầu tiên
		$config['num_links'] = 4; // so trang

		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<div>';
		$config['first_tag_close'] = '</div>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<div>';
		$config['last_tag_close'] = '</div>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<div>';
		$config['next_tag_close'] = '</div>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<div>';
		$config['prev_tag_close'] = '</div>';
		$config['cur_tag_open'] = '<b>';
		$config['cur_tag_close'] = '</b>';
		
		$this->pagination->initialize($config);

		$this->load->view('phantrang_view', $dulieu);
	}

}

/* End of file phantrang.php */
/* Location: ./application/controllers/phantrang.php */