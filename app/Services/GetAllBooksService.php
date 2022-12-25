<?php

namespace App\Services;

use Illuminate\Support\Collection;

class GetAllBooksService extends BookService
{
    public function execute(): Collection
    {
        return cache()->remember("AllBooks", self::CACHE_TIME, function () {
            return $this->getAllSorted();
        });
    }
}
