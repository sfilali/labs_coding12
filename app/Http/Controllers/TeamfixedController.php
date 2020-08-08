<?php

namespace App\Http\Controllers;

use App\Teamfixed;
use Illuminate\Http\Request;

class TeamfixedController extends Controller
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
        $team = new Teamfixed();
        $team -> nom = request('nom');
        $team -> fonction = request('fonction');
        $team -> imgurl = request('url');

        $team -> save();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teamfixed  $teamfixed
     * @return \Illuminate\Http\Response
     */
    public function show(Teamfixed $teamfixed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teamfixed  $teamfixed
     * @return \Illuminate\Http\Response
     */
    public function edit(Teamfixed $teamfixed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teamfixed  $teamfixed
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $team = Teamfixed::find($id);
        $team -> nom = request('nom');
        $team -> fonction = request('fonction');
        $team -> imgurl = request('url');

        $team -> save();
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teamfixed  $teamfixed
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teamfixed::where('id', $id)->delete();
        return redirect()->back();
    }
}
