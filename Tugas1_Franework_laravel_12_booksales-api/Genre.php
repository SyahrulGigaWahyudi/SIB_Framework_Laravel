<?php

namespace App\Models;

class Genre
{
    public static function all(): array
    {
        return [
            ['id' => 1, 'name' => 'Fiction', 'description' => 'A literary work based on the imagination and not necessarily on fact.'],
            ['id' => 2, 'name' => 'Non-Fiction', 'description' => 'A literary work based on facts and real events.'],
            ['id' => 3, 'name' => 'Science Fiction', 'description' => 'A genre that deals with imaginative and futuristic concepts.'],
            ['id' => 4, 'name' => 'Romance', 'description' => 'A genre that focuses on love and romance.'],
            ['id' => 5, 'name' => 'Mystery', 'description' => 'A genre built around crimes and unsolved puzzles.'],
        ];
    }
}