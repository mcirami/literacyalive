<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CampRegistration extends Mailable
{
    use Queueable, SerializesModels;

    public $date;

    public $name;
    public $address;
    public $city;
    public $state;
    public $zip;
    public $phone;
    public $email;
    public $child_name;
    public $school;
    public $age;
    public $allergies;
    public $emergency_contact;
    public $emergency_phone;
    public $add_persons;


    /**
     * Create a new message instance.
     */
    public function __construct($validatedData)
    {
        $date = 'December 22, 2025';
        if (isset($validatedData['date'])) {
            if($validatedData['date'] == 1) {
                $date = 'March 16, 2026';
            } elseif ($validatedData['date'] == 2) {
                $date = 'March 17, 2026';
            }
        }
        $this->date = $date;
        $this->name = $validatedData['name'];
        $this->address = $validatedData['address'];
        $this->city = $validatedData['city'];
        $this->state = $validatedData['state'];
        $this->zip = $validatedData['zip'];
        $this->phone = $validatedData['phone'];
        $this->email = $validatedData['email'];
        $this->child_name = $validatedData['child_name'];
        $this->school = $validatedData['school'];
        $this->age = $validatedData['age'];
        $this->allergies = $validatedData['allergies'];
        $this->emergency_contact = $validatedData['emergency_contact'];
        $this->emergency_phone = $validatedData['emergency_phone'];
        $this->add_persons = $validatedData['add_persons'];
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
            subject: 'Camp Registration',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.camp-register',
            with: [
                'date' => $this->date,
                'name' => $this->name,
                'address' => $this->address,
                'city' => $this->city,
                'state' => $this->state,
                'zip' => $this->zip,
                'phone' => $this->phone,
                'email' => $this->email,
                'child_name' => $this->child_name,
                'school' => $this->school,
                'age' => $this->age,
                'allergies' => $this->allergies,
                'emergency_contact' => $this->emergency_contact,
                'emergency_phone' => $this->emergency_phone,
                'add_persons' => $this->add_persons,
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
