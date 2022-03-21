<?php

namespace App\Http\Controllers;

use App\Models\Avistamento;
use App\Http\Requests\StoreAvistamentoRequest;
use App\Http\Requests\UpdateAvistamentoRequest;

class AvistamentoController extends Controller
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
     * @param  \App\Http\Requests\StoreAvistamentoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAvistamentoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avistamento  $avistamento
     * @return \Illuminate\Http\Response
     */
    public function show(Avistamento $avistamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avistamento  $avistamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Avistamento $avistamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAvistamentoRequest  $request
     * @param  \App\Models\Avistamento  $avistamento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAvistamentoRequest $request, Avistamento $avistamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avistamento  $avistamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avistamento $avistamento)
    {
        //
    }
}
