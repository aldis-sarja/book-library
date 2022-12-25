<?php

namespace App\Services;

use Illuminate\Support\Collection;

class GetTopBooksService extends BookService
{
    public function execute(int $count = 10): Collection
    {
        return cache()->remember(
            "TopBooks:" . $count,
            self::CACHE_TIME,
            function () use($count) {
                return $this->getAllSorted()
                    ->slice(0, $count)
                    ->filter(function($book) {
                        return $book->getTakenInCurrentMonth() > 0;
                    });
        });
    }
}
