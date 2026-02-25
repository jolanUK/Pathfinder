<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('firstName');
            $table->string('surname');
            $table->string('pronouns');
            $table->string('email');
            $table->string('telephone');
            $table->longText('address');
            $table->string('postcode');
            $table->date('dob');
            $table->boolean('emergencyConsent')->nullable();
            $table->string('emergencyFirstName')->nullable();
            $table->string('emergencySurname')->nullable();
            $table->string('emergencyRelationship')->nullable();
            $table->string('emergencyTelephone')->nullable();
            $table->json('referrer');
            $table->string('referrerOther')->nullable();
            $table->string('disabilities');
            $table->string('difficulties');
            $table->string('ethnicity');
            $table->string('gender');
            $table->string('age');
            $table->boolean('declaration')->nullable();
            $table->boolean('surveys')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
