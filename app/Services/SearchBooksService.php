<?php

namespace App\Services;

use Illuminate\Support\Collection;

class SearchBooksService extends BookService
{
    public function execute($search): Collection
    {
        $found = $this->sort($this->bookRepository->searchBooks($search)->map(function ($book) {
            return $this->remapBookData($book);
        }));
        if ($found->count() > 0) {
            return cache()->remember("Search:" . $search, self::CACHE_TIME, function () use ($found) {
                return $found->values();
            });
        }
        return $found;
    }
}
