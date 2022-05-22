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
