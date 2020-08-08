<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titre_services')->insert([
            'titre' => 'Get in (=the lab=) and see the services'
        ]);
        // DB::table('services')->insert([
        //     "icone_id" => null,
        //     "titre" => "Get in the lab",
        //     "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
        // ]);
        // DB::table('services')->insert([
        //     "icone_id" => 11,
        //     "titre" => "Projects online",
        //     "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
        // ]);
        // DB::table('services')->insert([
        //     "icone_id" => 37,
        //     "titre" => "SMART MARKETING",
        //     "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
        // ]);
        // DB::table('services')->insert([
        //     "icone_id" => 39,
        //     "titre" => "Social Media",
        //     "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
        // ]);
        // DB::table('services')->insert([
        //     "icone_id" => 36,
        //     "titre" => "Brainstorming",
        //     "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
        // ]);
        // DB::table('services')->insert([
        //     "icone_id" => 26,
        //     "titre" => "Documented",
        //     "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
        // ]);
        // DB::table('services')->insert([
        //     "icone_id" => 18,
        //     "titre" => "Responsive",
        //     "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
        // ]);
        // DB::table('services')->insert([
        //     "icone_id" => 43,
        //     "titre" => "Retina ready",
        //     "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
        // ]);
        // DB::table('services')->insert([
        //     "icone_id" => 12,
        //     "titre" => "Ultra modern",
        //     "texte" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
        // ]);
    }
}
