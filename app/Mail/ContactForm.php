<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable {
	use Queueable, SerializesModels;

	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public $email;
	public $name;
	public $subject;
	public $message;

	public function __construct($request) {
		//
		$this->email = $request->email;
		$this->name = $request->name;
		$this->subject = $request->subject;
		$this->message = $request->message;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build() {
		return $this->from($this->email, $this->name)
				->subject($this->subject)
				->markdown('email.contact');
	}
}
