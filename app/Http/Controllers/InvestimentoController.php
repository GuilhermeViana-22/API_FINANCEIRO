<?php

namespace App\Http\Controllers;

use App\Models\Investimento;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInvestimentoRequest;
use App\Http\Requests\UpdateInvestimentoRequest;

class InvestimentoController extends Controller
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
     * @param  \App\Http\Requests\StoreInvestimentoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvestimentoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Investimento  $investimento
     * @return \Illuminate\Http\Response
     */
    public function show(Investimento $investimento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investimento  $investimento
     * @return \Illuminate\Http\Response
     */
    public function edit(Investimento $investimento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvestimentoRequest  $request
     * @param  \App\Models\Investimento  $investimento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvestimentoRequest $request, Investimento $investimento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investimento  $investimento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investimento $investimento)
    {
        //
    }
}
