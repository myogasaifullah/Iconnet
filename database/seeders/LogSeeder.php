<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activities = [
            'Login',
            'Logout',
            'Menambahkan promo',
            'Menghapus banner',
            'Mengubah paket internet',
        ];

        for ($i = 0; $i < 20; $i++) {
            DB::table('logs')->insert([
                'activity' => $activities[array_rand($activities)],
                'user' => 'admin',
                'created_at' => Carbon::now()->subDays(rand(0, 10)),
            ]);
        }
    }
}
