<?php

namespace App\Mail;

use App\Challenge;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ChallengeEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $challenge;
    public $user;

    /**
     * Create a new message instance.
     *
     * @param User $user
     * @param Challenge $challenge
     */
    public function __construct(Challenge $challenge)
    {
        $this->challenge = $challenge;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.challenge', ['challenge'=> $this->challenge])
            ->subject("Day ".$this->challenge->day. " | " . $this->challenge->name);



    }
}
