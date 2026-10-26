<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            ['name' => 'J.K. Rowling', 'photo' => 'jk_rowling.jpg', 'bio' => 'British author, best known for the Harry Potter series.'],
            ['name' => 'George R.R. Martin', 'photo' => 'george_rr_martin.jpg', 'bio' => 'American novelist, known for A Song of Ice and Fire.'],
            ['name' => 'Isaac Asimov', 'photo' => 'isaac_asimov.jpg', 'bio' => 'American author and professor of biochemistry, known for science fiction.'],
            ['name' => 'Agatha Christie', 'photo' => 'agatha_christie.jpg', 'bio' => 'British crime novelist.'],
            ['name' => 'Stephen King', 'photo' => 'stephen_king.jpg', 'bio' => 'American author of horror fiction.'],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}