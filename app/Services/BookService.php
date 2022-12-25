<?php

namespace App\Services;

use App\Models\Book;
use App\Repositories\BookRepositoryInterface;
use Carbon\Carbon;

abstract class BookService
{
    protected BookRepositoryInterface $bookRepository;
    protected const CACHE_TIME = 10;

    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    protected function remapBookData(Book $book): BookData
    {
        $totalTaken = 0;
        $takenInCurrentMonth = 0;
        $currentMonth = Carbon::now()->startOfMonth();
        if ($book->taken) {
            foreach ($book->taken as $taken) {
                $totalTaken++;
                if ($taken->date >= $currentMonth) {
                    $takenInCurrentMonth++;
                }
            }
        }

        return new BookData(
            $book->title,
            $book->author,
            $book->have_taken != null,
            $totalTaken,
            $takenInCurrentMonth
        );
    }
}
