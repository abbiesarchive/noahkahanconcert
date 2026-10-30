<?php

namespace App\Models;

use Database\Factories\RegistrationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    /** @use HasFactory<RegistrationFactory> */
    use HasFactory;

    /**
     * Concert schedules a visitor can choose from.
     *
     * @var array<string, string>
     */
    public const SCHEDULES = [
        'sat-02-aug' => 'Saturday, 02 August 2025 · Doors open 17:00 WIB · Kebun Raya, Jakarta',
        'sun-03-aug' => 'Sunday, 03 August 2025 · Doors open 17:00 WIB · Kebun Raya, Jakarta',
        'sat-09-aug' => 'Saturday, 09 August 2025 · Doors open 17:00 WIB · Kebun Raya, Jakarta',
    ];

    /**
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'ticket_quantity',
        'ticket_type',
        'concert_schedule',
    ];
}
