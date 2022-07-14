<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MemberEmail extends Mailable
{
    use Queueable, SerializesModels;
    protected $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Confirmation of your registeration at N-CRG.BMD')->markdown('emails.memberEmail')->with(['message' => $this->message]);
    }
}
