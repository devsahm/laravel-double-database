<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReferralCode extends Mailable
{
    use Queueable, SerializesModels;
 public $agent;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($agent)
    {
        $this->agent=$agent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.send-referral');
    }
}
