<?php

namespace App\Models;

class Author
{
    public static function all(): array
    {
        return [
            ['id' => 1, 'name' => 'J.K. Rowling', 'photo' => 'jk_rowling.jpg', 'bio' => 'British author, best known for the Harry Potter series.'],
            ['id' => 2, 'name' => 'George R.R. Martin', 'photo' => 'george_rr_martin.jpg', 'bio' => 'American novelist, known for A Song of Ice and Fire.'],
            ['id' => 3, 'name' => 'Isaac Asimov', 'photo' => 'isaac_asimov.jpg', 'bio' => 'American author and professor of biochemistry, known for science fiction.'],
            ['id' => 4, 'name' => 'Agatha Christie', 'photo' => 'agatha_christie.jpg', 'bio' => 'British crime novelist.'],
            ['id' => 5, 'name' => 'Stephen King', 'photo' => 'stephen_king.jpg', 'bio' => 'American author of horror fiction.'],
        ];
    }
}