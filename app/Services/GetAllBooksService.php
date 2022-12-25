<?php

namespace App\Services;

use Illuminate\Support\Collection;

class GetAllBooksService extends BookService
{
    public function execute(): Collection
    {
        return cache()->remember("AllBooks", self::CACHE_TIME, function () {
            $books = $this->bookRepository->getAllBooks()->map(function ($book) {
                return $this->remapBookData($book);
            });
            return $books->sort(function ($book1, $book2) {
                if ($book1->getTakenInCurrentMonth() === $book2->getTakenInCurrentMonth()) {
                    if ($book1->getTotalTaken() === $book2->getTotalTaken()) {
                        return 0;
                    }
                    return ($book1->getTotalTaken() < $book2->getTotalTaken()) ? 1 : -1;
                }
                return ($book1->getTakenInCurrentMonth() < $book2->getTakenInCurrentMonth()) ? 1 : -1;
            });
        });
    }
}
