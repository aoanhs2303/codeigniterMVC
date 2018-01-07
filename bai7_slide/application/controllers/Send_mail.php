<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require('mail/PHPMailerAutoload.php');

class Send_mail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('mail_view');
	}

	public function do_send()
	{
		$ten = $this->input->post('ten');
		$mailnguoinhan = $this->input->post('mail');
		$noidung = $this->input->post('noidung');

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
		$mail->FromName = "Quản trị Web AoAnhs2303.tk";

		$mail->addAddress($mailnguoinhan, "AoAnhs2303");

		$mail->isHTML(true);

		$mail->Subject = $ten;
		$mail->Body = $noidung;
		// $mail->AltBody = "This is the plain text version of the email content";

		if(!$mail->send()) 
		{
		    echo "Mailer Error: " . $mail->ErrorInfo;
		} 
		else 
		{
		    echo "Message has been sent successfully";
		}
	}

}

/* End of file Send_mail.php */
/* Location: ./application/controllers/Send_mail.php */