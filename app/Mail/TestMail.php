<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $messageText;
    public $buttonUrl;
    public $buttonText;

    public function __construct($messageText = 'This is a test message', $buttonUrl = '', $buttonText = 'Click Here')
    {
        $this->messageText = $messageText;
        $this->buttonUrl = $buttonUrl;
        $this->buttonText = $buttonText;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Test Mail',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'email.test',
            with: [
                'messageText' => $this->messageText,
                'buttonUrl' => $this->buttonUrl,
                'buttonText' => $this->buttonText,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
