<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GlobalSettings extends Settings
{
    public string $appName;

    public static function group(): string
    {
        return 'global';
    }
}
