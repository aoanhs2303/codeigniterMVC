<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mangdemo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// $sv[0] = "Viet";
		// $sv[1] = "Luc";
		// $sv[2] = "Hung";

		// $mang2 = array("Viet", "Hung", "Luc");	
		// foreach ($mang2 as $key => $value) {
		// 	echo $value . "<br>";
		// }

		// $mang3 = array("sv01" => "Luc", "sv02" => "Hung", "svEx" => "Thao Anh");
		// foreach ($mang3 as $key => $value) {
		// 	echo $key . " " . $value . "<br>";
		// }

		$mangnhieuchieu = array(
			'an_sang' => array(
				'mon1' => "banh mi",
				'mon2' => "sua"		
			) ,
			'an_trua' => array(
				'mon1' => "banh mi 2",
				'mon2' => "sua 2"		
			) ,
			'an_tuoi' => array(
				'mon1' => "banh mi 3",
				'mon2' => "sua 3"		
			)
		);

		foreach ($mangnhieuchieu as $key => $value) {
			echo $key . '<br>';
			foreach ($value as $key2 => $value2) {
				echo $key2 . ' ' . $value2 . '<br>';

			}
		}
	}

}

/* End of file mangdemo.php */
/* Location: ./application/controllers/mangdemo.php */