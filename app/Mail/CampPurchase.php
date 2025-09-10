<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CampPurchase extends Mailable
{
    use Queueable, SerializesModels;

    public $date;
    public $name;
    public $email;
    public $child_name;

    /**
     * Create a new message instance.
     */
    public function __construct($validatedData)
    {
        $this->date = $validatedData['date'];
        $this->name = $validatedData['name'];
        $this->email = $validatedData['email'];
        $this->child_name = $validatedData['child_name'];
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('contact@literacyalive.org', 'Literacy Alive'),
            replyTo: [
                new Address($this->email, $this->name),
            ],
            subject: 'Camp Purchase',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.camp-purchase',
            with: [
                'date' => $this->date,
                'name' => $this->name,
                'email' => $this->email,
                'child_name' => $this->child_name,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
