<?php

namespace App\Repositories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Collection;

class BookRepository implements BookRepositoryInterface
{
    public function getAllBooks(): Collection
    {
        return Book::with('taken')->get();
    }
}
