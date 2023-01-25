<?php

namespace App\Http\Controllers;

use App\Models\HairVolume;
use App\Http\Requests\StoreHairVolumeRequest;
use App\Http\Requests\UpdateHairVolumeRequest;

class HairVolumeController extends Controller
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
     * @param  \App\Http\Requests\StoreHairVolumeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHairVolumeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HairVolume  $hairVolume
     * @return \Illuminate\Http\Response
     */
    public function show(HairVolume $hairVolume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HairVolume  $hairVolume
     * @return \Illuminate\Http\Response
     */
    public function edit(HairVolume $hairVolume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHairVolumeRequest  $request
     * @param  \App\Models\HairVolume  $hairVolume
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHairVolumeRequest $request, HairVolume $hairVolume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HairVolume  $hairVolume
     * @return \Illuminate\Http\Response
     */
    public function destroy(HairVolume $hairVolume)
    {
        //
    }
}
