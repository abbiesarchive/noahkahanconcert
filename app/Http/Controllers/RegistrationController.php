<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationRequest;
use App\Mail\RegistrationEmail;
use App\Models\Registration;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public const TICKET_TYPE = 'General admission';

    public const CONCERT_SCHEDULE = 'Saturday, 02 August 2025 · Doors open 17:00 WIB · Kebun Raya, Jakarta';

    public function store(StoreRegistrationRequest $request): RedirectResponse
    {
        $registration = Registration::create([
            'name' => $request->validated('name'),
            'email' => $request->validated('email'),
            'ticket_quantity' => $request->validated('ticket_quantity'),
            'ticket_type' => self::TICKET_TYPE,
            'concert_schedule' => self::CONCERT_SCHEDULE,
        ]);

        Mail::to($registration->email)->send(new RegistrationEmail($registration));

        return redirect()
            ->to(route('home').'#register')
            ->with('registered_name', $registration->name);
    }
}
