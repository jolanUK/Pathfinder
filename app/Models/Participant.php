<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Participant extends Model
{
    /** @use HasFactory<\Database\Factories\ParticipantFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'surname',
        'subjectPronoun',
        'objectPronoun',
        'email',
        'telephone',
        'address',
        'postcode',
        'dob',
        'emergency_consent',
        'emergency_first_name',
        'emergency_surname',
        'emergency_relationship',
        'emergency_telephone',
        'referrer',
        'referrer_other',
        'disabilities',
        'difficulties',
        'ethnicity',
        'gender',
        'age',
        'declaration',
        'surveys',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
