<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface BookRepositoryInterface
{
    public function getAllBooks(): Collection;
}
