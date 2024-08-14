<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;
use App\Models\BacRequest;

class BacRequestAccepted extends Mailable
{
    use Queueable, SerializesModels;

    public $bacRequest;
    public $emailMessage;
    public $attachmentPath;

    /**
     * Create a new message instance.
     */
    public function __construct(BacRequest $bacRequest, string $emailMessage, ?string $attachmentPath)
    {
        $this->bacRequest = $bacRequest;
        $this->emailMessage = $emailMessage;
        $this->attachmentPath = $attachmentPath;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'BAC Request Accepted',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.bac-request-accepted',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];

        if ($this->attachmentPath) {
            $attachments[] = Attachment::fromPath(storage_path('app/public/' . $this->attachmentPath));
        }

        return $attachments;
    }
}