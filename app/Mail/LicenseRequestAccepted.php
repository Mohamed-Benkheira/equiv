<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use App\Models\LicenseRequest;

use Illuminate\Queue\SerializesModels;

class LicenseRequestAccepted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $licenseRequest;
    public $emailMessage;
    public $attachmentPath;
    public function __construct(LicenseRequest $licenseRequest, string $emailMessage, ?string $attachmentPath)
    {
        $this->licenseRequest = $licenseRequest;
        $this->emailMessage = $emailMessage;
        $this->attachmentPath = $attachmentPath;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'License Request Accepted',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.license-request-accepted',
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
