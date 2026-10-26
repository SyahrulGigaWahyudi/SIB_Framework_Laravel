<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            ['title' => 'Harry Potter and the Sorcerers Stone', 'description' => 'The first book in the Harry Potter series.', 'price' => 50000, 'stock' => 50, 'cover_photo' => 'harry_potter.jpg', 'genre_id' => 1, 'author_id' => 1],
            ['title' => 'A Game of Thrones', 'description' => 'The first novel in A Song of Ice and Fire.', 'price' => 90000, 'stock' => 30, 'cover_photo' => 'game_of_thrones.jpg', 'genre_id' => 1, 'author_id' => 2],
            ['title' => 'Foundation', 'description' => 'A science fiction novel about the fall of a galactic empire.', 'price' => 70000, 'stock' => 40, 'cover_photo' => 'foundation.jpg', 'genre_id' => 3, 'author_id' => 3],
            ['title' => 'Murder on the Orient Express', 'description' => 'A classic detective novel.', 'price' => 55000, 'stock' => 25, 'cover_photo' => 'orient_express.jpg', 'genre_id' => 5, 'author_id' => 4],
            ['title' => 'It', 'description' => 'A horror novel set in the town of Derry.', 'price' => 75000, 'stock' => 15, 'cover_photo' => 'it.jpg', 'genre_id' => 1, 'author_id' => 5],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}