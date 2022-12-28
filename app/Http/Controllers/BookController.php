<?php

namespace App\Http\Controllers;

use App\Services\GetAllBooksService;
use App\Services\SearchBooksService;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
    public function index(GetAllBooksService $getAllBooksService): View
    {
        try {
            $books = $getAllBooksService->execute();
            return view('welcome', ['books' => $books]);

        } catch (QueryException $e) {
            report($e);
            return view('error', ['error' => "Something went wrong!"]);
        }
    }

    public function search(SearchBooksService $searchBooksService, Request $request): View
    {
        $search = $request->get('search');
        try {
            $books = $searchBooksService->execute($search);
            return view('welcome', ['books' => $books]);

        } catch (QueryException $e) {
            report($e);
            return view('error', ['error' => "Something went wrong!"]);
        }
    }
}
