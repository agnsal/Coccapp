<?php
/**
Copyright 2022 Agnese Salutari.
Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at
http://www.apache.org/licenses/LICENSE-2.0
Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on
an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and limitations under the License
 **/

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
