<?php

namespace App\Http\Controllers;

use App\Models\Individuo;
use App\Http\Requests\StoreIndividuoRequest;
use App\Http\Requests\UpdateIndividuoRequest;

class IndividuoController extends Controller
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
     * @param  \App\Http\Requests\StoreIndividuoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIndividuoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Individuo  $individuo
     * @return \Illuminate\Http\Response
     */
    public function show(Individuo $individuo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Individuo  $individuo
     * @return \Illuminate\Http\Response
     */
    public function edit(Individuo $individuo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIndividuoRequest  $request
     * @param  \App\Models\Individuo  $individuo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIndividuoRequest $request, Individuo $individuo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Individuo  $individuo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Individuo $individuo)
    {
        //
    }
}
