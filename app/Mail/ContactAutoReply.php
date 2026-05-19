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
    public $subject;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $subject)
    {
        $this->name = $name;
        $this->subject = $subject;
    }

    /**
     * Get the message envelope.
     */
   public function envelope(): Envelope
    {
        $replySubject = 'RE: ' . ($this->subject ?? 'Legal Inquiry');

        return new Envelope(
            subject: $replySubject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact-auto-reply',
        );
    }
}