<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RegistrantActivity>
 */
class RegistrantActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'account_registration' => 1,
            'account_registration_time' => now(),
            'create_biodata' => 1,
            'create_biodata_time' => now(),
            'update_biodata' => 1,
            'update_biodata_time' => now(),
            'download_biodata' => 1,
            'download_biodata_time' => now(),
            'interview_session' => 1,
            'interview_session_time' => now(),
            'registration_completed' => 1,
            'registration_completed_time' => now(),
        ];
    }
}
