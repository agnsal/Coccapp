<?php

namespace App\Http\Controllers;

use App\Models\Coop;
use App\Http\Requests\StoreCoopRequest;
use App\Http\Requests\UpdateCoopRequest;

class CoopController extends Controller
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
     * @param  \App\Http\Requests\StoreCoopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCoopRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coop  $coop
     * @return \Illuminate\Http\Response
     */
    public function show(Coop $coop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coop  $coop
     * @return \Illuminate\Http\Response
     */
    public function edit(Coop $coop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCoopRequest  $request
     * @param  \App\Models\Coop  $coop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCoopRequest $request, Coop $coop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coop  $coop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coop $coop)
    {
        //
    }
}
