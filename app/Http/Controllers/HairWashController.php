<?php

namespace App\Http\Controllers;

use App\Models\HairWash;
use App\Http\Requests\StoreHairWashRequest;
use App\Http\Requests\UpdateHairWashRequest;

class HairWashController extends Controller
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
     * @param  \App\Http\Requests\StoreHairWashRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHairWashRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HairWash  $hairWash
     * @return \Illuminate\Http\Response
     */
    public function show(HairWash $hairWash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HairWash  $hairWash
     * @return \Illuminate\Http\Response
     */
    public function edit(HairWash $hairWash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHairWashRequest  $request
     * @param  \App\Models\HairWash  $hairWash
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHairWashRequest $request, HairWash $hairWash)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HairWash  $hairWash
     * @return \Illuminate\Http\Response
     */
    public function destroy(HairWash $hairWash)
    {
        //
    }
}
