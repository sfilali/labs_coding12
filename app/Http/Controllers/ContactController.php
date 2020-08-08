<?php

namespace App\Http\Controllers;

use App\Accueil;
use App\Contact;
use App\Maps;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accueils = Accueil::all();
        $maps = Maps::first();
        $contacts = Contact::all();

        return view('contact', compact('accueils', 'maps', 'contacts'));
    
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
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $contact = Contact::find($id);
        $contact -> titre = request('titre');
        $contact -> description = request('description');
        $contact -> titre2 = request('titre2');
        $contact -> adresse = request('adresse');
        $contact -> codepostale_ville = request('codepostale_ville');
        $contact -> numero = request('numero');
        $contact -> email = request('email');
        $contact -> bouton = request('bouton');

        $contact -> save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
