<?php

namespace App\Http\Controllers;

use App\Models\LeavInConditioner;
use App\Http\Requests\StoreLeavInConditionerRequest;
use App\Http\Requests\UpdateLeavInConditionerRequest;

class LeavInConditionerController extends Controller
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
     * @param  \App\Http\Requests\StoreLeavInConditionerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLeavInConditionerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LeavInConditioner  $leavInConditioner
     * @return \Illuminate\Http\Response
     */
    public function show(LeavInConditioner $leavInConditioner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LeavInConditioner  $leavInConditioner
     * @return \Illuminate\Http\Response
     */
    public function edit(LeavInConditioner $leavInConditioner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLeavInConditionerRequest  $request
     * @param  \App\Models\LeavInConditioner  $leavInConditioner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLeavInConditionerRequest $request, LeavInConditioner $leavInConditioner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LeavInConditioner  $leavInConditioner
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeavInConditioner $leavInConditioner)
    {
        //
    }
}
