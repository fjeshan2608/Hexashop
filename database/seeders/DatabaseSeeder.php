<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Jeshan Khan',
            'user_role' => 'admin',
            'email' => 'jeshank1123@gmail.com',
            'password'=>Hash::make('123456789'),
        ]);
    }
}