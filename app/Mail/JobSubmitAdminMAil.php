<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobSubmitAdminMAil extends Mailable
{
    use Queueable, SerializesModels;

    public $application;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->application = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('srimanibilla@gmail.com')
                    ->to('srimani@academicconnect.in')
                    ->subject('We have received a application for '.$this->application->position)
                    ->view('job_submit_admin_mail')
                    ->with('data', $this->application);
    }
}
