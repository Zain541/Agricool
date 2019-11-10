<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
            public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($aggrement)
    {
        $this->email = $aggrement;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.contactmail',['email'=>$this->email]);
    }
}
