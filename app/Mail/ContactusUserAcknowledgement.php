<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactusUserAcknowledgement extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from('srimanibilla@gmail.com')
                    ->to($this->data['email'])
                    ->subject('We have received your request')
                    ->view('contact_us_mail')
                    ->with('data', $this->data);
    }
}
