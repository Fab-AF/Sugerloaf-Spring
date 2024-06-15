<?php
namespace App\Services;
use Mail;

class EmailService
{
	public function __construct()
	{
	}

	### Send Email
	private function sendNotification($toEmail,$view,$subject,$param,$attachment=[],$cc=[],$bcc=[])
	{
		try {
			Mail::to($toEmail)->send(new \App\Mail\SendEmail($param,$view,$subject,$attachment,$cc,$bcc));
			$flag = "1";
		} catch(Exception $e){
			$flag = "0";
		}
		return $flag;
	}

	### Send Activities Email
	public function sendContactUs($param)
	{
		$toEmail = [['email' => config("mail.from.address"),'name' => config("mail.from.name")]];
		$view = "emails.contact-us";
		$subject = $param["subject"] ?? "Contact US inquiry";
		$cc =  $param["cc_email"] ?? [];
		return $this->sendNotification($toEmail,$view,$subject,$param,'',$cc);
	}
}