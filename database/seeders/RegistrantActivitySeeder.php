<?php

namespace Database\Seeders;

use App\Models\RegistrantActivity;
use App\Models\User;
use Illuminate\Database\Seeder;

class RegistrantActivitySeeder extends Seeder
{
    public function run(): void
    {
        $num = User::whereHas('roles')->count() + 1;
        for ($i = $num; $i <= 51; $i++) {
            RegistrantActivity::create([
                'user_id' => $i,
                'account_registration' => 1,
                'account_registration_time' => now(),
                'create_biodata' => 1,
                'create_biodata_time' => now(),
                'update_biodata' => 1,
                'update_biodata_time' => now(),
                'download_biodata' => 1,
                'download_biodata_time' => now(),
            ]);
        }
    }
}
