<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'Clean Code',
                'author' => 'Robert C. Martin',
                'publication_year' => 2008,
                'genre' => 'Programming',
                'library_id' => 1, // Tham chiếu đến thư viện IT Đại học ABC
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Introduction to Algorithms',
                'author' => 'Thomas H. Cormen',
                'publication_year' => 2009,
                'genre' => 'Computer Science',
                'library_id' => 1, // Tham chiếu đến thư viện IT Đại học ABC
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Selfish Gene',
                'author' => 'Richard Dawkins',
                'publication_year' => 1976,
                'genre' => 'Science',
                'library_id' => 2, // Tham chiếu đến Thư viện Khoa học
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
