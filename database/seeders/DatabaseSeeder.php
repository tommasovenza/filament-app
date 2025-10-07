<?php

namespace Database\Seeders;

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

        User::factory()->create([
            'name' => 'Tommaso',
            'email' => 'tvenza@sienaimaging.it',
            'password' => Hash::make('123456'),
        ]);

        // calling other seeders
        $this->call([
            ProductSeeder::class,
        ]);
    }
}
