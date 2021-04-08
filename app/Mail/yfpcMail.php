<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class yfpcMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $donor_name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($donor_name)
    {
        $this->donor_name = $donor_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $this->donor_name = $donor_name;
        return $this->subject('Thank you' )->view('user_mail');
    }
}
