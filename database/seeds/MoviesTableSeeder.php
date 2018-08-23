<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	$movies=[
    		['name'=>'Bakuryuu Sentai Abaranger','actress_id'=>1,'poster'=>'abaranger.jpg'],
    		['name'=>'GoGo Sentai Boukenger','actress_id'=>2,'poster'=>'boukenger.jpg'],
    		['name'=>'Hyakujuu Sentai Gaoranger','actress_id'=>3,'poster'=>'gaoranger.jpg'],
    		['name'=>'Juken Sentai Gekiranger','actress_id'=>4,'poster'=>'gekiranger.jpg'],
    		['name'=>'Ninpuu Sentai Hurricaneger','actress_id'=>5,'poster'=>'hurricanger.jpg'],
    		['name'=>'Kamen Rider Drive','actress_id'=>2,'poster'=>'Kamen-Rider-Drive.png'],
    		['name'=>'Kamen Rider W','actress_id'=>5,'poster'=>'Kamen-Rider-W.jpg'],
    	];
        DB::table('movies')->insert($movies);
    }
}
