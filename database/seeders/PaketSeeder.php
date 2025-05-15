<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pakets')->truncate();
        DB::table('pakets')->insert([
            [
                'id' => 1,
                'nama_paket' => 'iconnet',
                'kecepatan' => '20 Mbps',
                'harga' => 277500.00,
                'deskripsi' => 'Simetris Upload & Download',
                'created_at' => '2025-04-14 01:51:27',
                'updated_at' => '2025-04-27 18:14:07',
            ],
            [
                'id' => 2,
                'nama_paket' => 'semua',
                'kecepatan' => '35 Mbps',
                'harga' => 288600.00,
                'deskripsi' => 'Simetris Upload & Download',
                'created_at' => '2025-04-14 01:51:43',
                'updated_at' => '2025-04-14 01:51:43',
            ],
            [
                'id' => 3,
                'nama_paket' => 'makin',
                'kecepatan' => '50 Mbps',
                'harga' => 432900.00,
                'deskripsi' => 'Simetris Upload & Download',
                'created_at' => '2025-04-14 01:52:09',
                'updated_at' => '2025-04-14 01:52:09',
            ],
            [
                'id' => 4,
                'nama_paket' => 'mudah',
                'kecepatan' => '100 Mbps',
                'harga' => 699300.00,
                'deskripsi' => 'Simetris Upload & Download',
                'created_at' => '2025-04-14 01:52:24',
                'updated_at' => '2025-04-14 01:52:24',
            ],
        ]);
    }
}
