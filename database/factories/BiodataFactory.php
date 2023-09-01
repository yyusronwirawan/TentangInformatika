<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Biodata>
 */
class BiodataFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'fullname' => fake()->name(),
            'whatsapp' => mt_rand(0, 99999999999999),
            'religion' => Str::title('islam'),
            'sex' => Str::title('laki-laki'),
            'city' => fake()->city(),
            'birthday' => fake()->dateTime(),
            'address' => fake()->streetAddress(),
            'university' => Str::title('universitas muhammadiyah parepare'),
            'faculty' => Str::title('teknik'),
            'semester' => rand(1, 8),
            'major' => Str::title('informatika'),
            'disease' => Str::title('maag, asma, jantung'),
            'vehicle' => Str::title('tidak punya'),
            'father' => fake()->name(),
            'fatherWhatsapp' => mt_rand(0, 99999999999999),
            'mother' => fake()->name(),
            'motherWhatsapp' => mt_rand(0, 99999999999999),
            'organizationsExp' => fake()->paragraph(),
            'goals' => fake()->paragraph(1),
            'created_at' => now(),
        ];
    }
}
