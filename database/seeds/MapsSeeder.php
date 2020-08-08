<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maps')->insert([
            'mapsurl' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.6931442984996!2d4.339036315971566!3d50.8553663659862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c38c275028d3%3A0xc7799151146ebf77!2sMolenGeek!5e0!3m2!1sfr!2sbe!4v1593681457600!5m2!1sfr!2sbe',
        ]);
    }
}
