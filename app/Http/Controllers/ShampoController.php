<?php

namespace App\Http\Controllers;

use App\Models\Shampo;
use App\Http\Requests\StoreShampoRequest;
use App\Http\Requests\UpdateShampoRequest;

class ShampoController extends Controller
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
     * @param  \App\Http\Requests\StoreShampoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShampoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shampo  $shampo
     * @return \Illuminate\Http\Response
     */
    public function show(Shampo $shampo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shampo  $shampo
     * @return \Illuminate\Http\Response
     */
    public function edit(Shampo $shampo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShampoRequest  $request
     * @param  \App\Models\Shampo  $shampo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShampoRequest $request, Shampo $shampo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shampo  $shampo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shampo $shampo)
    {
        //
    }
}
