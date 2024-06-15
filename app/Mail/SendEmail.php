<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;
	public $data; //Data will be available in email template
	public $view; //Ex: 'emails.contactus'
	public $subject; //Email Subject
	public $attachment; //Attach files
	public $cc;
	public $bcc;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$view,$subject='',$attachment="",$cc=[],$bcc=[])
    {
		$this->data = $data;
		$this->view = $view;
		$this->subject = ($subject ? $subject : ($data['subject'] ? $data['subject'] : "Notification"));
		$this->attachment = $attachment;
		$this->cc = $cc;
		$this->bcc = $bcc;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->view($this->view)->subject($this->subject)->with(['data' => $this->data]);

		/* Attachment Files */
		if(!empty($this->attachment) && $this->attachment != "")
		{
			if(is_array($this->attachment)) 
			{
				foreach($this->attachment as $filePath)
				{
					$email->attach($filePath);
				}
			}else {
				$email->attach($this->attachment);
			}
		}
		//CC emails
		if(!empty($this->cc) && $this->cc != null) {
			$email->cc($this->cc);
		}
		//BCC emails
		if(!empty($this->bcc) && $this->bcc != null) {
			$email->bcc($this->bcc);
		}
		return $email;
    }
}
