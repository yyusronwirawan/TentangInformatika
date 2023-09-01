<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Mario',
            'picture' => 'image/default/avatar/Helper(12).png',
            'has_verified' => 1,
            'username' => '@mario46_',
            'email' => 'mariomad2296@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ]);

        // Pengurus
        User::create([
            'name' => $name = 'Prawira Resky',
            'picture' => 'image/default/avatar/Helper(6).png',
            'whatsapp' => '082249501963',
            'has_verified' => 1,
            'username' => '@' . strtolower(Str::of($name)->explode(' ')->get(0)) . mt_rand(0, 99999),
            'email' => 'wira@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ]);

        // Pengurus
        User::create([
            'name' => $name = 'Anisa Cahyani',
            'picture' => 'image/default/avatar/Helper(2).png',
            'whatsapp' => '089604472897',
            'has_verified' => 1,
            'username' => '@' . strtolower(Str::of($name)->explode(' ')->get(0)) . mt_rand(0, 99999),
            'email' => 'nisa@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ]);

        // Pengurus
        User::create([
            'name' => $name = 'Fitra Novianti',
            'picture' => 'image/default/avatar/Helper(3).png',
            'whatsapp' => '082158694009',
            'has_verified' => 1,
            'username' => '@fitra46_',
            'email' => 'fitra@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ]);

        // Pengurus
        User::create([
            'name' => $name = 'Jabal Nur',
            'picture' => 'image/default/avatar/Helper(5).png',
            'whatsapp' => '085256949235',
            'has_verified' => 1,
            'username' => '@' . strtolower(Str::of($name)->explode(' ')->get(0)) . mt_rand(0, 99999),
            'email' => 'jabal@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ]);

        // Pengurus
        User::create([
            'name' => $name = 'Ahmad Alif',
            'picture' => 'image/default/avatar/Helper(9).png',
            'whatsapp' => '082154838046',
            'has_verified' => 1,
            'username' => '@' . strtolower(Str::of($name)->explode(' ')->get(0)) . mt_rand(0, 99999),
            'email' => 'alif@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ]);

        // Pengurus
        User::create([
            'name' => $name = 'Ahsan Mubarak',
            'picture' => 'image/default/avatar/Helper(10).png',
            'whatsapp' => '082154838046',
            'has_verified' => 1,
            'username' => '@' . strtolower(Str::of($name)->explode(' ')->get(0)) . mt_rand(0, 99999),
            'email' => 'ahsan@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ]);

        // Pengurus
        User::create([
            'name' => $name = 'Hirawati',
            'picture' => 'image/default/avatar/Helper(4).png',
            'whatsapp' => '082154838046',
            'has_verified' => 1,
            'username' => '@' . strtolower(Str::of($name)->explode(' ')->get(0)) . mt_rand(0, 99999),
            'email' => 'hirawati@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ]);

        // Pengurus
        User::create([
            'name' => $name = 'Putri',
            'picture' => 'image/default/avatar/Helper(11).png',
            'whatsapp' => '082154838046',
            'has_verified' => 1,
            'username' => '@' . strtolower(Str::of($name)->explode(' ')->get(0)) . mt_rand(0, 99999),
            'email' => 'putri@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ]);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'operator']);

        User::first()->assignRole('admin');
        User::find(2)->assignRole('operator');
        User::find(3)->assignRole('operator');
        User::find(4)->assignRole('operator');
        User::find(5)->assignRole('operator');
        User::find(6)->assignRole('operator');
        User::find(7)->assignRole('operator');
        User::find(8)->assignRole('operator');
        User::find(9)->assignRole('operator');
    }
}
