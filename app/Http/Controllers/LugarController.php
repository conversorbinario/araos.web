<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use App\Http\Requests\StoreLugarRequest;
use App\Http\Requests\UpdateLugarRequest;

class LugarController extends Controller
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
     * @param  \App\Http\Requests\StoreLugarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLugarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function show(Lugar $lugar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function edit(Lugar $lugar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLugarRequest  $request
     * @param  \App\Models\Lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLugarRequest $request, Lugar $lugar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lugar $lugar)
    {
        //
    }
}
