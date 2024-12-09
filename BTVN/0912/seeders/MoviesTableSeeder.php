<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            [
                'title' => 'Avengers: Endgame',
                'director' => 'Anthony và Joe Russo',
                'release_date' => '2019-04-26',
                'duration' => 181,
                'cinema_id' => 1, // CGV Vincom
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Spider-Man: No Way Home',
                'director' => 'Jon Watts',
                'release_date' => '2021-12-17',
                'duration' => 148,
                'cinema_id' => 2, // Lotte Cinema Landmark
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
