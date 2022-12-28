<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Services\GetAllBooksService;
use App\Services\GetTopBooksService;
use App\Services\SearchBooksService;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetAllBooksService $getAllBooksService)
    {
        try {
            $books = $getAllBooksService->execute();
            return view('welcome', ['books' => $books]);
        } catch (QueryException $e) {
            return $e->getMessage();
        }
    }

    public function search(SearchBooksService $searchBooksService, Request $request)
    {
        $search = $request->get('search');
        try {
            $books = $searchBooksService->execute($search);
            return view('welcome', ['books' => $books]);
        } catch (QueryException $e) {
            return $e->getMessage();
        }
    }
}
