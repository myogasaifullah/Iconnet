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
        // Seeder untuk user default
        User::factory()->create([
            'name' => 'iconnet',
            'email' => 'iconnet@gmail.com',
            'password' => Hash::make('semua makin mudah'),
        ]);

        // Panggil seeder lainnya
        $this->call([
            VisitSeeder::class,
            LogSeeder::class,
        ]);
    }
}
