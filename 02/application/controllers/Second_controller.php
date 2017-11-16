<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Second_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo "second controller";
		echo "<h2>Aoanhs2303</h2>";
	}
	public function other() {
		echo "string";
	}
}

/* End of file Second_controller.php */
/* Location: ./application/controllers/Second_controller.php */