<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactAutoReply extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $subjectLine;

    public function __construct($name, $subject)
    {
        $this->name = $name;
        $this->subjectLine = $subject;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'RE: ' . ($this->subjectLine ?? 'Legal Inquiry'),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-auto-reply',
            with: [
                'name' => $this->name,
                'subject' => $this->subjectLine,
            ],
        );
    }
}