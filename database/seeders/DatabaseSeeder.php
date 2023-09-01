<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\RegistrationStatus;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        // Status Pendaftaran (Buka / Tutup)
        RegistrationStatus::create([
            'status' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->call([
            // Admin & Pengurus
            UserSeeder::class,

            // Pendaftar
            // BiodataSeeder::class,
            // RegistrantActivitySeeder::class,

            // Schedules
            ScheduleSeeder::class,
        ]);
    }
}
