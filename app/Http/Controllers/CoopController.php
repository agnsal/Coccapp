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

use App\Http\Resources\CoopResource;
use App\Models\Coop;
use App\Http\Requests\StoreCoopRequest;
use App\Http\Requests\UpdateCoopRequest;
use App\Models\User;
use App\Services\GUIdo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CoopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(CoopResource::collection(Coop::with('chickens')->get())->resolve());
//        return response()->json(CoopResource::collection(Coop::all()));
    }

    /**
     * Show the form for creating a new resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->json(GUIdo::makeForm([
            'name' => ['label' => 'Name', 'required' => true, 'length' => '< 30'],
        ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCoopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCoopRequest $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        try {
            DB::beginTransaction();
            $newCoop = Coop::create($validated);
            $newCoop->users()->associate(User::find(Auth::id()))->save(); // or Auth::user()->id
            DB::commit();
        } catch (Throwable $e) {
            DB::rollback();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coop  $coop
//     * @return \Illuminate\Http\Response
     */
    public function show(Coop $coop)
    {
        return response()->json(CoopResource::collection(Coop::with('chickens')->find($coop->id)->get())->resolve());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coop  $coop
//     * @return \Illuminate\Http\Response
     */
    public function edit(Coop $coop)
    {
        return response()->json(GUIdo::makeForm([
            'name' => ['label' => 'Name', 'required' => true, 'length' => '< 30', 'placeholder' => $coop->name],
        ]));
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
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        try {
            DB::beginTransaction();
            $newCoop = Coop::update($validated);
            $newCoop->users()->associate(User::find(Auth::id()))->save(); // or Auth::user()->id
            DB::commit();
        } catch (Throwable $e) {
            DB::rollback();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coop  $coop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coop $coop)
    {
        $coop->delete();
    }
}
