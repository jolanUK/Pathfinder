<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ParticipantSettings extends Settings
{
    public static function group(): string
    {
        return 'participant';
    }
}
