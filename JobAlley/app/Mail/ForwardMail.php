<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;


class ForwardMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $attachedFile; 

    /**
     * Create a new message instance.
     */
    public function __construct($name, $application, $attachedFile)
    {
        $this->name = $name;
        $this->application = $application;
        $this->attachedFile = $attachedFile;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'JobAlley: New Applicants - Forward Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            
            view: 'admin.forward-application',
            with: [
                'name' => $this->name,
                'application' => $this->application,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        // attach resume
        return [
            Attachment::fromPath(storage_path('app/public/' . $this->attachedFile)),
        ];
    }
}
