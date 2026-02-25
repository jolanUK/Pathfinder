<?php

namespace App\Filament\Pages;

use App\Enums\NavigationGroups;
use App\Settings\GlobalSettings;
use BackedEnum;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

class ManageGlobalSettings extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedGlobeEuropeAfrica;

    protected static string|UnitEnum|null $navigationGroup = NavigationGroups::Settings;

    protected static string $settings = GlobalSettings::class;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('appName')
                    ->label('Application Name')
                    ->required()
                    ->columnSpan(2),
                Repeater::make('pronouns')
                    ->schema([
                        TextInput::make('pronoun')
                            ->required()
                            ->live(onBlur: true),
                    ])
                    ->itemLabel(fn (array $state): ?string => $state['pronoun'] ?? null)
                    ->columnSpan(2),
            ]);
    }
}
