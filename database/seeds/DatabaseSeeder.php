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
        $this->call(ActressesTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
    }
}
