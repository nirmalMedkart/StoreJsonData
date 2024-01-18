<?php

namespace App\Http\Controllers;

use App\Models\ConfigTable;
use App\Http\Requests\StoreConfigTableRequest;
use App\Http\Requests\UpdateConfigTableRequest;

class ConfigTableController extends Controller
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
     * @param  \App\Http\Requests\StoreConfigTableRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConfigTableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConfigTable  $configTable
     * @return \Illuminate\Http\Response
     */
    public function show(ConfigTable $configTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConfigTable  $configTable
     * @return \Illuminate\Http\Response
     */
    public function edit(ConfigTable $configTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConfigTableRequest  $request
     * @param  \App\Models\ConfigTable  $configTable
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConfigTableRequest $request, ConfigTable $configTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConfigTable  $configTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConfigTable $configTable)
    {
        //
    }
}
