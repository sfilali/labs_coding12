<?php

namespace App\Http\Controllers;

use App\TitreTestimonials;
use Illuminate\Http\Request;

class TitreTestimonialsController extends Controller
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
     * @param  \App\TitreTestimonials  $titreTestimonials
     * @return \Illuminate\Http\Response
     */
    public function show(TitreTestimonials $titreTestimonials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TitreTestimonials  $titreTestimonials
     * @return \Illuminate\Http\Response
     */
    public function edit(TitreTestimonials $titreTestimonials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TitreTestimonials  $titreTestimonials
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $titre = TitreTestimonials::find($id);
        $titre -> titre = request('titre');

        $titre -> save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TitreTestimonials  $titreTestimonials
     * @return \Illuminate\Http\Response
     */
    public function destroy(TitreTestimonials $titreTestimonials)
    {
        //
    }
}
