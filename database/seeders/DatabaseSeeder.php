<?php

namespace Database\Seeders;

use App\Models\Server;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Server::factory(5)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'webmaster@renaissance.nl',
            'password' => Hash::make('password'),
        ]);
    }
}
