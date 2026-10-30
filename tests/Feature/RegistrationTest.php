<?php

namespace Tests\Feature;

use App\Mail\RegistrationEmail;
use App\Models\Registration;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_is_saved_and_confirmation_email_is_sent(): void
    {
        Mail::fake();

        $response = $this->post(route('registration.store'), [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'ticket_quantity' => 2,
            'agree' => '1',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('registrations', [
            'email' => 'jane@example.com',
            'ticket_quantity' => 2,
        ]);

        Mail::assertSent(RegistrationEmail::class, function (RegistrationEmail $mail): bool {
            return $mail->hasTo('jane@example.com')
                && $mail->hasSubject('Your Registration is Successful');
        });
    }

    public function test_email_contains_name_ticket_and_schedule(): void
    {
        $registration = Registration::factory()->create(['name' => 'Jane Doe']);

        $mail = new RegistrationEmail($registration);

        $mail->assertSeeInHtml('Jane Doe');
        $mail->assertSeeInHtml($registration->ticket_type);
        $mail->assertSeeInHtml('02 August 2025');
    }

    public function test_same_email_can_register_more_than_once(): void
    {
        Mail::fake();

        foreach (range(1, 2) as $attempt) {
            $this->post(route('registration.store'), [
                'name' => 'Teaching Team',
                'email' => 'teacher@example.com',
                'ticket_quantity' => 1,
                'agree' => '1',
            ])->assertSessionHasNoErrors();
        }

        $this->assertDatabaseCount('registrations', 2);
        Mail::assertSent(RegistrationEmail::class, 2);
    }
}
