<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanniereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bannieres')->insert([
            "url" => "/img/01.jpg",
        ]);
        DB::table('bannieres')->insert([
            "url" => "/img/02.jpg",
        ]);
    }
}
