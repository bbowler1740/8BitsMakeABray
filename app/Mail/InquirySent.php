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
    public string $visitorName;
    public string $visitorEmail;
    public string $visitorMessage;

    public function __construct(string $visitorName, string $visitorEmail, string $visitorMessage)
    {
        $this->visitorName = $visitorName;
        $this->visitorEmail = $visitorEmail;
        $this->visitorMessage =  $visitorMessage;
    }
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->visitorEmail, $this->visitorName),
            to: ['braybowler1995@gmail.com'],
            subject: 'Inquiry Sent',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.inquiry-sent',
        );
    }
}
