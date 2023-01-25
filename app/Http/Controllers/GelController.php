<?php

namespace App\Http\Controllers;

use App\Models\Gel;
use App\Http\Requests\StoreGelRequest;
use App\Http\Requests\UpdateGelRequest;

class GelController extends Controller
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
     * @param  \App\Http\Requests\StoreGelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gel  $gel
     * @return \Illuminate\Http\Response
     */
    public function show(Gel $gel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gel  $gel
     * @return \Illuminate\Http\Response
     */
    public function edit(Gel $gel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGelRequest  $request
     * @param  \App\Models\Gel  $gel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGelRequest $request, Gel $gel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gel  $gel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gel $gel)
    {
        //
    }
}
