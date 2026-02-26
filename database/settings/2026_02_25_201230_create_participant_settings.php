<?php

use App\Enums\ObjectPronouns;
use App\Enums\SubjectPronouns;
use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('participant.subjectPronouns', SubjectPronouns::cases());
        $this->migrator->add('participant.objectPronouns', ObjectPronouns::cases());
        $this->migrator->add('participant.minimumAge', '18');
    }
};
