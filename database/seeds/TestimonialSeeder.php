<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            "nom" => "Michael Smith",
            "fonction" => "CEO Company",
            "imgurl" => "/img/avatar/01.jpg",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
        DB::table('testimonials')->insert([
            "nom" => "Michael Smith",
            "fonction" => "CEO Company",
            "imgurl" => "/img/avatar/01.jpg",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
        DB::table('testimonials')->insert([
            "nom" => "Michael Smith",
            "fonction" => "CEO Company",
            "imgurl" => "/img/avatar/01.jpg",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
        DB::table('testimonials')->insert([
            "nom" => "Michael Smith",
            "fonction" => "CEO Company",
            "imgurl" => "/img/avatar/02.jpg",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
        DB::table('testimonials')->insert([
            "nom" => "Michael Smith",
            "fonction" => "CEO Company",
            "imgurl" => "/img/avatar/01.jpg",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
        DB::table('testimonials')->insert([
            "nom" => "Michael Smith",
            "fonction" => "CEO Company",
            "imgurl" => "/img/avatar/02.jpg",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
        DB::table('testimonials')->insert([
            "nom" => "Michael Smith",
            "fonction" => "CEO Company",
            "imgurl" => "/img/avatar/01.jpg",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
        DB::table('testimonials')->insert([
            "nom" => "Michael Smith",
            "fonction" => "CEO Company",
            "imgurl" => "/img/avatar/02.jpg",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
    }
}
