<?php

namespace App\Mail;

use App\Models\Registration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegistrationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Registration $registration) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Registration is Successful',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail-template.registration-successful',
            with: [
                'userName' => $this->registration->name,
                'ticketType' => $this->registration->ticket_type,
                'ticketQuantity' => $this->registration->ticket_quantity,
                'concertSchedule' => $this->registration->concert_schedule,
            ],
        );
    }
}
