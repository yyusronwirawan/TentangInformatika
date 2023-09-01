<?php

namespace Database\Seeders;

use App\Models\Biodata;
use Illuminate\Database\Seeder;

class BiodataSeeder extends Seeder
{
    public function run(): void
    {
        Biodata::factory(51)->create();
    }
}
