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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained('users')->onDelete('cascade');
            $table->string('fullname')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('religion')->nullable();
            $table->string('sex')->nullable();
            $table->string('city')->nullable();
            $table->date('birthday')->nullable();
            $table->string('address')->nullable();
            $table->string('university')->nullable();
            $table->string('faculty')->nullable();
            $table->string('major')->nullable();
            $table->string('semester')->nullable();
            $table->string('father')->nullable();
            $table->string('fatherWhatsapp')->nullable();
            $table->string('mother')->nullable();
            $table->string('motherWhatsapp')->nullable();
            $table->string('vehicle')->nullable();
            $table->text('disease')->nullable();
            $table->text('organizationsExp')->nullable();
            $table->text('goals')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};
