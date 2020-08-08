<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccueilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accueils')->insert([
            "urlmenulogo" => "/img/big-logo.png",
            "lien1" => "Home",
            "lien2" => "Services",
            "lien3" => "Blog",
            "lien4" => "Contact",
            "titrediscover" => "Get in (=the Lab=) and  discover the world"

        ]);

        DB::table('titre_testimonials')->insert([
            'titre' => 'What our clients say'
        ]);
        DB::table('titre_teams')->insert([
            'titre' => 'Get in (=the Lab and=)  meet the team'
        ]);
        DB::table('readies')->insert([
            "titre" => "Are you ready to stand out?",
            "soustitre" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.",
            "bouton" => "Brouwse",
        ]);
        DB::table('slogans')->insert([
            'slogan' => 'Get your freebie template now!'
        ]);

    }
}
