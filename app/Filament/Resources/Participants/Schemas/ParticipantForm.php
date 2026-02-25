<?php

namespace App\Filament\Resources\Participants\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class ParticipantForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make()
                    ->tabs([
                        Tab::make(__('Basic information'))
                            ->schema([
                                Select::make('user')
                                    ->label(__('Associated user account'))
                                    ->belowLabel(__('Please make sure the participant you are registering already has an account with us.'))
                                    ->relationship(titleAttribute: 'name')
                                    ->searchable()
                                    ->loadingMessage(__('Loading users...'))
                                    ->native(false)
                                    ->required(),
                                TextInput::make('firstName')
                                    ->required(),
                                TextInput::make('surname')
                                    ->required(),
                                TextInput::make('pronouns')
                                    ->required(),
                                DatePicker::make('dob')
                                    ->label(__('Date of birth'))
                                    ->required(),
                            ]),
                        Tab::make('Contact information')
                            ->schema([
                                TextInput::make('email')
                                    ->label('Email address')
                                    ->email()
                                    ->required(),
                                TextInput::make('telephone')
                                    ->tel()
                                    ->required(),
                                Textarea::make('address')
                                    ->required()
                                    ->columnSpanFull(),
                                TextInput::make('postcode')
                                    ->required(),
                            ]),
                        Tab::make('Emergency contact')
                            ->schema([
                                Toggle::make('emergencyConsent'),
                                TextInput::make('emergencyFirstName'),
                                TextInput::make('emergencySurname'),
                                TextInput::make('emergencyRelationship'),
                                TextInput::make('emergencyTelephone')
                                    ->tel(),
                            ]),
                        Tab::make(__('Referrer'))
                            ->schema([
                                TextInput::make('referrer')
                                    ->required(),
                                TextInput::make('referrerOther'),
                            ]),
                        Tab::make(__('Accessibility'))
                            ->schema([
                                TextInput::make('disabilities')
                                    ->required(),
                                TextInput::make('difficulties')
                                    ->required(),
                            ]),
                        Tab::make(__('Demographic'))
                            ->schema([
                                TextInput::make('ethnicity')
                                    ->required(),
                                TextInput::make('gender')
                                    ->required(),
                                TextInput::make('age')
                                    ->required(),
                            ]),
                        Tab::make(__('Consent'))
                            ->schema([
                                Toggle::make('declaration'),
                                Toggle::make('surveys'),
                            ]),
                    ])
                    ->columnSpan(2),
            ]);
    }
}
