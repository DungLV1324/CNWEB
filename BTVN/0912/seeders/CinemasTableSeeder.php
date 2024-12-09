<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CinemasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cinemas')->insert([
            [
                'name' => 'CGV Vincom',
                'location' => 'Vincom Center, Hà Nội',
                'total_seats' => 300,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lotte Cinema Landmark',
                'location' => 'Landmark 72, Hà Nội',
                'total_seats' => 250,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
