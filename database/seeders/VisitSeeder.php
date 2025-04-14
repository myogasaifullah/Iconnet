<?php

namespace Database\Seeders;

use Carbon\Carbon;
// use Illuminate\Container\Attributes\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VisitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Simulasi kunjungan ke halaman selama 30 hari terakhir
        $pages = ['/', '/paket', '/promo', '/tentang', '/kontak'];

        for ($i = 0; $i < 30; $i++) {
            DB::table('visits')->insert([
                'page' => $pages[array_rand($pages)],
                'visited_at' => Carbon::now()->subDays($i),
            ]);
        }
    }
}
