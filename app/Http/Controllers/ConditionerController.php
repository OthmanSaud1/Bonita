<?php

namespace App\Http\Controllers;

use App\Models\Conditioner;
use App\Http\Requests\StoreConditionerRequest;
use App\Http\Requests\UpdateConditionerRequest;

class ConditionerController extends Controller
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
     * @param  \App\Http\Requests\StoreConditionerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConditionerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conditioner  $conditioner
     * @return \Illuminate\Http\Response
     */
    public function show(Conditioner $conditioner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conditioner  $conditioner
     * @return \Illuminate\Http\Response
     */
    public function edit(Conditioner $conditioner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConditionerRequest  $request
     * @param  \App\Models\Conditioner  $conditioner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConditionerRequest $request, Conditioner $conditioner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conditioner  $conditioner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conditioner $conditioner)
    {
        //
    }
}
