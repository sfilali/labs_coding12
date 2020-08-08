<?php

namespace App\Http\Controllers;

use App\Accueil;
use App\Article;
use App\Contact;
use App\Icone;
use App\Service;
use App\Servicesprimes;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accueils = Accueil::all();
        $services = Service::all();
        $servicesprimes = Servicesprimes::first();
        $serviceprimesL = $services->sortDesc()->take(3);
        $serviceprimesR = $services->sortDesc()->skip(3)->take(3);
        $articles = Article::all();
        $blograpides = $articles->sortDesc()->take(3);
        $contacts = Contact::all();

        return view('services', compact('accueils', 'services', 'serviceprimesL', 'serviceprimesR', 'servicesprimes', 'blograpides', 'contacts'));
    
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
        $service = new Service();
        $service -> titre = request('titre');
        $service -> texte = request('texte');
        $service -> icone_id = request('icone_id');

        $service -> save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $accueils = Accueil::all();
        $services = Service::all();
        $icones = Icone::all();
        $servicesprimes = Servicesprimes::first();
        $contacts = Contact::all();

        return view('admin.services', compact('accueils', 'services', 'icones', 'servicesprimes', 'contacts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $service = Service::find($id);
        $service -> titre = request('titre');
        $service -> texte = request('texte');
        $service -> icone_id = request('icone_id');

        $service -> save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::where('id', $id)->delete();

        return redirect()->back();
    }
}
