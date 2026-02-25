<?php

namespace App\Filament\Resources\Participants\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ParticipantInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('user_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('firstName'),
                TextEntry::make('surname'),
                TextEntry::make('pronouns'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('telephone'),
                TextEntry::make('address')
                    ->columnSpanFull(),
                TextEntry::make('postcode'),
                TextEntry::make('dob')
                    ->date(),
                IconEntry::make('emergencyConsent')
                    ->boolean()
                    ->placeholder('-'),
                TextEntry::make('emergencyFirstName')
                    ->placeholder('-'),
                TextEntry::make('emergencySurname')
                    ->placeholder('-'),
                TextEntry::make('emergencyRelationship')
                    ->placeholder('-'),
                TextEntry::make('emergencyTelephone')
                    ->placeholder('-'),
                TextEntry::make('referrerOther')
                    ->placeholder('-'),
                TextEntry::make('disabilities'),
                TextEntry::make('difficulties'),
                TextEntry::make('ethnicity'),
                TextEntry::make('gender'),
                TextEntry::make('age'),
                IconEntry::make('declaration')
                    ->boolean()
                    ->placeholder('-'),
                IconEntry::make('surveys')
                    ->boolean()
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
