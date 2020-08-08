<?php

namespace App\Http\Controllers;

use App\Accueil;
use App\Banniere;
use App\Contact;
use App\Icone;
use App\Presentation;
use App\Ready;
use App\Service;
use App\Slogan;
use App\Team;
use App\Teamfixed;
use App\Testimonial;
use App\TitreService;
use App\TitreTeams;
use App\TitreTestimonials;
use App\User;
use App\Video;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accueils = Accueil::all();
        $slogan = Slogan::first();
        $bannieres = Banniere::all();
        $presentations = Presentation::all();
        $videos = Video::first();
        $titretestimonials = TitreTestimonials::first();
        $testimonials = Testimonial::all()->sortDesc()->take(6);
        $titreservices = TitreService::first();
        $services = Service::all()->sortDesc();
        $icones = Icone::all();
        $titreteams = TitreTeams::first();
        $teams = Team::all()->shuffle()->take(2);
        $teamleft = $teams[0];
        $teamright = $teams[1];
        $teamfixed = Teamfixed::first();
        $ready = Ready::first();
        $contacts = Contact::all();

        return view('accueil', compact('accueils', 'slogan', 'bannieres', 'presentations', 'videos', 'testimonials', 'services', 'icones', 'teamleft', 'teamright', 'teamfixed', 'ready', 'contacts',  'titretestimonials', 'titreservices', 'titreteams'));
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
     * @param  \App\Accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $accueils = Accueil::all();
        // $bannieres = Banniere::all();
        // $presentations = Presentation::all();
        // $videos = Video::first();
        // $testimonials = Testimonial::all();
        // $services = Service::all();
        // $teams = Team::all()->shuffle()->take(2);
        // $teamleft = $teams[0];
        // $teamright = $teams[1];
        // $teamfixed = Teamfixed::all();
        // $contacts = Contact::all();

        // return view('accueil', compact('accueils', 'bannieres', 'presentations', 'videos', 'testimonials', 'services', 'teamleft', 'teamright', 'teamfixed', 'contacts'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function edit(Accueil $accueil)
    {
        $accueils = Accueil::first();
        $slogan = Slogan::first();
        $bannieres = Banniere::all();
        $presentations = Presentation::first();
        $videos = Video::first();
        $titretestimonials = TitreTestimonials::first();
        $testimonials = Testimonial::all();
        $titreservices = TitreService::first();
        $services = Service::all();
        $icones = Icone::all();
        $titreteams = TitreTeams::first();
        $teams = Team::all();
        $teamfixed = Teamfixed::first();
        $ready = Ready::first();
        $contacts = Contact::first();

        return view('admin.accueil', compact('accueils', 'slogan', 'bannieres', 'presentations', 'videos', 'testimonials', 'services', 'icones', 'teams', 'teamfixed', 'ready', 'contacts', 'titretestimonials', 'titreservices', 'titreteams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $accueils = Accueil::find($id);
        $accueils -> urlmenulogo = request('url');
        $accueils -> lien1 = request('lien1');
        $accueils -> lien2 = request('lien2');
        $accueils -> lien3 = request('lien3');
        $accueils -> lien4 = request('lien4');
        $accueils -> slogan = request('slogan');

        $accueils -> save();

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accueil $accueil)
    {
        //
    }
}
