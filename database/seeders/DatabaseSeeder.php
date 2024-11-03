<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@d.com',
            'username' => 'test123',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => "I Made Sena Pernata",
            'email' => 'sena@gmail.com',
            'username' => 'admin123',
            'password' => 'password',
        ]);
    }
}
