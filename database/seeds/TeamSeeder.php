<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            "imgurl" => "/img/team/1.jpg",
            "nom" => "Christinne Williams",
            "fonction" => "Project Manager",
        ]);
        
        DB::table('teams')->insert([
            "imgurl" => "/img/team/2.jpg",
            "nom" => "Christinne Williams",
            "fonction" => "Junior developer",
        ]);
        DB::table('teams')->insert([
            "imgurl" => "/img/team/3.jpg",
            "nom" => "Christinne Williams",
            "fonction" => "Digital designer",
        ]);
    }
}
