<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use App\Services\GetTopBooksService;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function top(GetTopBooksService $getTopBooksService, Request $request): JsonResponse
    {
        $amount = (int)$request->get('amount');
        if (!$amount) {
            $amount = 10;
        }
        try {
            return response()->json(
                $getTopBooksService->execute($amount)->map(function ($book) {
                    return new BookResource($book);
                })
            );

        } catch (QueryException $e) {
            report($e);
            return response()->json(['error' => "Something went wrong!"], 404);
        }
    }
}
