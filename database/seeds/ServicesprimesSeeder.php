<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesprimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicesprimes')->insert([
            'titre' => 'Get in (=the Lab=) and  discover the world',
            'bouton' => 'Browse',
        ]);
    }
}
