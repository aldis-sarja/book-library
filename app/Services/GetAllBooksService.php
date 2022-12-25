<?php

namespace App\Services;

use Illuminate\Support\Collection;

class GetAllBooksService extends BookService
{
    public function execute(): Collection
    {
        $books = $this->bookRepository->getAllBooks();
        $books = $books->map(function ($book) {
            return $this->remapBookData($book);
        });
        return $books;

        return cache()->remeber("AllBooks", self::CACHE_TIME, function () {
            $books = $this->bookRepository->getAllBooks();
            $books = $books->map(function ($book) {
                return $this->remapBookData($book);
            });
            return $books;
        });
    }
}
