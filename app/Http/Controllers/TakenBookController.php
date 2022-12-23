<?php

namespace App\Http\Controllers;

use App\Models\TakenBook;
use App\Http\Requests\StoreTakenBookRequest;
use App\Http\Requests\UpdateTakenBookRequest;

class TakenBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTakenBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTakenBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TakenBook  $takenBook
     * @return \Illuminate\Http\Response
     */
    public function show(TakenBook $takenBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TakenBook  $takenBook
     * @return \Illuminate\Http\Response
     */
    public function edit(TakenBook $takenBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTakenBookRequest  $request
     * @param  \App\Models\TakenBook  $takenBook
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTakenBookRequest $request, TakenBook $takenBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TakenBook  $takenBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(TakenBook $takenBook)
    {
        //
    }
}
