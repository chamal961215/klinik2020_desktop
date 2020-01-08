<?php
require_once('PHPMailer/PHPMailerAutoload.php');
class Mail
{
	public static function sendMail($subject,$body,$address)
		{
			

			$mail=new PHPMailer();
			$mail->isSMTP();
			$mail->SMTPAuth=true;
			$mail->SMTPSecure='ssl';
			$mail->Host='smtp.gmail.com';
			$mail->Port='465';
			$mail->isHTML();
			$mail->Username='klinik.ruhuna@gmail.com';
			$mail->Password='#RUhunaKlinik';
			$mail->SetFrom('no-reply@howcode.org');
			$mail->Subject=$subject;
			$mail->Body=$body;
			$mail->AddAddress($address);
			$mail->Send();
			echo "<script type='text/javascript'>alert('An email was sent to your mail 2!');</script>";
			//echo "Sent Mail! Hello";
		}
}
?>