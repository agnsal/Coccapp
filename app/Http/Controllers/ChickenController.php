<?php

namespace App\Http\Controllers;

use App\Models\Chicken;
use App\Http\Requests\StoreChickenRequest;
use App\Http\Requests\UpdateChickenRequest;

class ChickenController extends Controller
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
     * @param  \App\Http\Requests\StoreChickenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChickenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chicken  $chicken
     * @return \Illuminate\Http\Response
     */
    public function show(Chicken $chicken)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chicken  $chicken
     * @return \Illuminate\Http\Response
     */
    public function edit(Chicken $chicken)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChickenRequest  $request
     * @param  \App\Models\Chicken  $chicken
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChickenRequest $request, Chicken $chicken)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chicken  $chicken
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chicken $chicken)
    {
        //
    }
}
