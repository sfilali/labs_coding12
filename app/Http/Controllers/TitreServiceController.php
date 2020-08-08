<?php

namespace App\Http\Controllers;

use App\TitreService;
use Illuminate\Http\Request;

class TitreServiceController extends Controller
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
     * @param  \App\TitreService  $titreService
     * @return \Illuminate\Http\Response
     */
    public function show(TitreService $titreService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TitreService  $titreService
     * @return \Illuminate\Http\Response
     */
    public function edit(TitreService $titreService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TitreService  $titreService
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $titre = TitreService::find($id);
        $titre -> titre = request('titre');

        $titre -> save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TitreService  $titreService
     * @return \Illuminate\Http\Response
     */
    public function destroy(TitreService $titreService)
    {
        //
    }
}
