<?php

namespace App\Services;

class BookData
{
    private string $title;
    private string $author;
    private bool $haveTaken;
    private int $totalTaken;
    private int $takenInCurrentMonth;

    public function __construct(string $title, string $author, bool $haveTaken, int $totalTaken, int $takenInCurrentMonth)
    {
        $this->title = $title;
        $this->author = $author;
        $this->haveTaken = $haveTaken;
        $this->totalTaken = $totalTaken;
        $this->takenInCurrentMonth = $takenInCurrentMonth;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getTotalTaken(): int
    {
        return $this->totalTaken;
    }

    public function getTakenInCurrentMonth(): int
    {
        return $this->takenInCurrentMonth;
    }

    public function getHaveTaken(): bool
    {
        return $this->haveTaken;
    }
}
