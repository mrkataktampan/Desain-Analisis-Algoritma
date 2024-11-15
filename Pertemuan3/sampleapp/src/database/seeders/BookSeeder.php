<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Bulan Kesatria',
            'author' => 'John',
            'rating' => '8',
            'reviews' => 'lumayan asik',
            'publication_year' => '2008',
            'genre' => 'Action'
        ]);
    }
}
