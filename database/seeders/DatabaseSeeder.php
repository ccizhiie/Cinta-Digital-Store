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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'password',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Kasir',
            'email' => 'kasir@gmail.com',
            'password' => 'password',
            'role' => 'cashier',
        ]);

        User::factory()->create([
            'name' => 'Member',
            'email' => 'member@gmail.com',
            'password' => 'password',
            'role' => 'member',
        ]);


        User::factory()->create([
            'name' => 'Pimpinan',
            'email' => 'pimpinan@gmail.com',
            'password' => 'password',
            'role' => 'leader',
        ]);
    }
}
