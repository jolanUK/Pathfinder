<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum NavigationGroups: string implements HasLabel
{
    case Settings = 'settings';

    public function getLabel(): string|Htmlable|null
    {
        return match ($this) {
            self::Settings => 'Settings',
        };
    }
}
