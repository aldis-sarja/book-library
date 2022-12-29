<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use App\Services\GetTopBooksService;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;

class BookController extends Controller
{
    public function topTen(GetTopBooksService $getTopBooksService): JsonResponse
    {
        try {
            return response()->json(
                $getTopBooksService->execute(10)->map(function ($book) {
                    return new BookResource($book);
                })
            );

        } catch (QueryException $e) {
            report($e);
            return response()->json(['error' => "Something went wrong!"], 404);
        }
    }
}
