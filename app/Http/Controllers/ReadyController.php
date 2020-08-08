<?php

namespace App\Http\Controllers;

use App\Ready;
use Illuminate\Http\Request;

class ReadyController extends Controller
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
     * @param  \App\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function show(Ready $ready)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function edit(Ready $ready)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $ready = Ready::find($id);
        $ready -> titre = request('titre');
        $ready -> soustitre = request('soustitre');
        $ready -> bouton = request('bouton');

        $ready -> save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ready $ready)
    {
        //
    }
}
