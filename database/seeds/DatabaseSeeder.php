<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(AccueilSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(BanniereSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(MapsSeeder::class);
        $this->call(PresentationSeeder::class);
        $this->call(ServicebladeSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(IconeSeeder::class);
        $this->call(ServicesprimesSeeder::class);
        $this->call(TeamfixedSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(VideoSeeder::class);

    }
}
