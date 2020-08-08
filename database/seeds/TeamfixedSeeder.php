<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamfixedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teamfixeds')->insert([
            "imgurl" => "/img/team/1.jpg",
            "nom" => "Christinne Williams",
            "fonction" => "CEO",
        ]);
    }
}
