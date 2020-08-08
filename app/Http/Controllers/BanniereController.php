<?php

namespace App\Http\Controllers;

use App\Banniere;
use Illuminate\Http\Request;

class BanniereController extends Controller
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
        $bannieres = new Banniere();
        $bannieres -> url = request('url');

        $bannieres -> save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banniere  $banniere
     * @return \Illuminate\Http\Response
     */
    public function show(Banniere $banniere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banniere  $banniere
     * @return \Illuminate\Http\Response
     */
    public function edit(Banniere $banniere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banniere  $banniere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bannieres = Banniere::find($id);
        $bannieres -> url = request('url');

        $bannieres -> save();

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banniere  $banniere
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Banniere::where('id', $id)->delete();

        return redirect()->back();
    }
}
