<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MemberRegistered extends Mailable
{
    use SerializesModels;
    protected $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($member)
    {
        $this->member = $member;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Member Registeration - ' . $this->member->name)->to('anirban@nitte.edu.in')->markdown('emails.memberReg')->with(['member' => $this->member]);
    }
}
