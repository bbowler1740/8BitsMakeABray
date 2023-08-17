<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InquirySent extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $visitorName;
    public string $visitorEmail;
    public string $visitorMessage;

    /**
     * Create a new message instance.
     */
    public function __construct(string $visitorName, string $visitorEmail, string $visitorMessage)
    {
        $this->visitorName = $visitorName;
        $this->visitorEmail = $visitorEmail;
        $this->visitorMessage =  $visitorMessage;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->visitorEmail, $this->visitorName),
            subject: 'Inquiry Sent',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.inquiry-sent',
        );
    }
}
