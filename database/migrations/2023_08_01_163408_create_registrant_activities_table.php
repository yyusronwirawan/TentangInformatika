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
        Schema::create('registrant_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->boolean('account_registration')->nullable();
            $table->timestampTz('account_registration_time')->nullable();
            $table->boolean('create_biodata')->nullable();
            $table->timestampTz('create_biodata_time')->nullable();
            $table->boolean('update_biodata')->nullable();
            $table->timestampTz('update_biodata_time')->nullable();
            $table->boolean('download_biodata')->nullable();
            $table->timestampTz('download_biodata_time')->nullable();
            $table->boolean('interview_session')->nullable();
            $table->timestampTz('interview_session_time')->nullable();
            $table->boolean('registration_completed')->nullable();
            $table->timestampTz('registration_completed_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrant_activities');
    }
};
