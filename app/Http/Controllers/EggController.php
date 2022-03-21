<?php

namespace App\Http\Controllers;

use App\Models\Egg;
use App\Http\Requests\StoreEggRequest;
use App\Http\Requests\UpdateEggRequest;

class EggController extends Controller
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
     * @param  \App\Http\Requests\StoreEggRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEggRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Egg  $egg
     * @return \Illuminate\Http\Response
     */
    public function show(Egg $egg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Egg  $egg
     * @return \Illuminate\Http\Response
     */
    public function edit(Egg $egg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEggRequest  $request
     * @param  \App\Models\Egg  $egg
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEggRequest $request, Egg $egg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Egg  $egg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Egg $egg)
    {
        //
    }
}
