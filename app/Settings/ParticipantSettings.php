<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ParticipantSettings extends Settings
{
    public $subjectPronouns;

    public $objectPronouns;

    public string $minimumAge;

    public static function group(): string
    {
        return 'participant';
    }
}
