<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject, $body, $sender, $sender_name;
    /**
     * Create a new message instance.
     */
    public function __construct($subject, $body, $sender, $sender_name)
    {
        $this->subject = $subject;
        $this->body = $body;
        $this->sender = $sender;
        $this->sender_name = $sender_name;
    }

    public function build()
    {
        return $this->subject($this->subject)
            ->from($this->sender, $this->sender_name)
            ->markdown('email_body', ['body' => $this->body]);
    }
}
