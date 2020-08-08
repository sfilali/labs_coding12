<?php

namespace App\Http\Controllers;

use App\Servicesprimes;
use Illuminate\Http\Request;

class ServicesprimesController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servicesprimes  $servicesprimes
     * @return \Illuminate\Http\Response
     */
    public function show(Servicesprimes $servicesprimes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servicesprimes  $servicesprimes
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicesprimes $servicesprimes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servicesprimes  $servicesprimes
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $table = Servicesprimes::find($id);
        $table -> titre = request('titre');
        $table -> bouton = request('bouton');

        $table -> save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicesprimes  $servicesprimes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicesprimes $servicesprimes)
    {
        //
    }
}
