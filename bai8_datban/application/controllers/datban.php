<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require('mail/PHPMailerAutoload.php');

class datban extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('datban_view');
	}

	public function datban()
	{
		$tenkh = $this->input->post('tenkh');
		$email = $this->input->post('email');
		$sdt = $this->input->post('sdt');
		$ngaydatban = $this->input->post('ngaydatban');
		$giodatban = $this->input->post('giodatban');
		$giodatban = strval($ngaydatban) . " " . strval($giodatban);
		$songuoi = $this->input->post('songuoi');

		$this->load->model('datban_model');
		if($this->datban_model->booking($tenkh, $email, $sdt, $ngaydatban, $giodatban, $songuoi)) {
			$mail = new PHPMailer;

			$mail->isSMTP();            
			//Set SMTP host name         
			$mail->CharSet = 'UTF-8';
			                 
			$mail->Host = "smtp.gmail.com";
			//Set this to true if SMTP host requires authentication to send email
			$mail->SMTPAuth = true;                          
			//Provide username and password     
			$mail->Username = "trannhulucs2303@gmail.com";                 
			$mail->Password = "jwxiksinsogpmzcm";                           
			//If SMTP requires TLS encryption then set it
			$mail->SMTPSecure = "tls";                           
			//Set TCP port to connect to 
			$mail->Port = 587;                                   

			$mail->From = "trannhulucs2303@gmail.com";
			$mail->FromName = "Thông báo đặt bàn";

			$mail->addAddress("trannhulucs2303@gmail.com", "AoAnhs2303");

			$mail->isHTML(true);

			$mail->Subject = "Thông báo có khách vừa đặt hàm tên là: " . $tenkh . " và SĐT: " . $sdt;
			$mail->Body = "Tên: " . $tenkh .  "<br/>Số điện thoại: " . $sdt. "<br/>Thời gian: " . $giodatban. "<br/>Email: " . $email;
			// $mail->AltBody = "This is the plain text version of the email content";

			if(!$mail->send()) 
			{
			    echo "Mailer Error: " . $mail->ErrorInfo;
			} 
			else 
			{
			    echo "Message has been sent successfully";
			}
		} else {
			echo "thất bại";
		}

	}

}

/* End of file datban.php */
/* Location: ./application/controllers/datban.php */