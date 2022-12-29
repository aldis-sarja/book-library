<?php

namespace App\Services;

use App\Models\Book;
use App\Repositories\BookRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Collection;

abstract class BookService
{
    protected BookRepositoryInterface $bookRepository;
    protected const CACHE_TIME = 180;

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

    protected function getAllSorted(): Collection
    {
        return $this->sort($this->bookRepository->getAllBooks()->map(function ($book) {
            return $this->remapBookData($book);
        }));
    }

    protected function sort(Collection $books): Collection
    {
        return $books->sort(function ($book1, $book2) {
            if ($book1->getTakenInCurrentMonth() === $book2->getTakenInCurrentMonth()) {
                if ($book1->getTotalTaken() === $book2->getTotalTaken()) {
                    return 0;
                }
                return ($book1->getTotalTaken() < $book2->getTotalTaken()) ? 1 : -1;
            }
            return ($book1->getTakenInCurrentMonth() < $book2->getTakenInCurrentMonth()) ? 1 : -1;
        });
    }
}
