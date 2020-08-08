<?php

namespace App\Http\Controllers;

use App\TitreTeams;
use Illuminate\Http\Request;

class TitreTeamsController extends Controller
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
     * @param  \App\TitreTeams  $titreTeams
     * @return \Illuminate\Http\Response
     */
    public function show(TitreTeams $titreTeams)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TitreTeams  $titreTeams
     * @return \Illuminate\Http\Response
     */
    public function edit(TitreTeams $titreTeams)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TitreTeams  $titreTeams
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $titre = TitreTeams::find($id);
        $titre -> titre = request('titre');

        $titre -> save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TitreTeams  $titreTeams
     * @return \Illuminate\Http\Response
     */
    public function destroy(TitreTeams $titreTeams)
    {
        //
    }
}
