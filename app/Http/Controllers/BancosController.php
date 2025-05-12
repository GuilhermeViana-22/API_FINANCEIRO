<?php

namespace App\Http\Controllers;

use App\Models\Bancos;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBancosRequest;
use App\Http\Requests\UpdateBancosRequest;

class BancosController extends Controller
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
     * @param  \App\Http\Requests\StoreBancosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBancosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bancos  $bancos
     * @return \Illuminate\Http\Response
     */
    public function show(Bancos $bancos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bancos  $bancos
     * @return \Illuminate\Http\Response
     */
    public function edit(Bancos $bancos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBancosRequest  $request
     * @param  \App\Models\Bancos  $bancos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBancosRequest $request, Bancos $bancos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bancos  $bancos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bancos $bancos)
    {
        //
    }
}
