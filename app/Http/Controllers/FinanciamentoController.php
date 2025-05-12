<?php

namespace App\Http\Controllers;

use App\Models\Financiamento;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFinanciamentoRequest;
use App\Http\Requests\UpdateFinanciamentoRequest;

class FinanciamentoController extends Controller
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
     * @param  \App\Http\Requests\StoreFinanciamentoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFinanciamentoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Financiamento  $financiamento
     * @return \Illuminate\Http\Response
     */
    public function show(Financiamento $financiamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Financiamento  $financiamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Financiamento $financiamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFinanciamentoRequest  $request
     * @param  \App\Models\Financiamento  $financiamento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFinanciamentoRequest $request, Financiamento $financiamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Financiamento  $financiamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Financiamento $financiamento)
    {
        //
    }
}
