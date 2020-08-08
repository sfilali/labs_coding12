<?php

namespace App\Http\Controllers;

use App\Slogan;
use Illuminate\Http\Request;

class SloganController extends Controller
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
     * @param  \App\Slogan  $slogan
     * @return \Illuminate\Http\Response
     */
    public function show(Slogan $slogan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slogan  $slogan
     * @return \Illuminate\Http\Response
     */
    public function edit(Slogan $slogan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slogan  $slogan
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $slogan = Slogan::find($id);
        $slogan -> slogan = request('slogan');

        $slogan -> save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slogan  $slogan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slogan $slogan)
    {
        //
    }
}
