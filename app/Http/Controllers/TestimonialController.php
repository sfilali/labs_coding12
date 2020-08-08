<?php

namespace App\Http\Controllers;

use App\Accueil;
use App\Testimonial;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;
use PhpParser\Node\Expr\New_;

class TestimonialController extends Controller
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
        $testimonial = new Testimonial();

        $testimonial -> nom = request('nom');
        $testimonial -> fonction = request('fonction');
        $testimonial -> imgurl = request('url');
        $testimonial -> commentaire = request('commentaire');

        $testimonial -> save();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial -> nom = request('nom');
        $testimonial -> fonction = request('fonction');
        $testimonial -> imgurl = request('url');
        $testimonial -> commentaire = request('commentaire');

        $testimonial -> save();
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testimonial::where('id', $id)->delete();
        return redirect()->back();
    }
}
