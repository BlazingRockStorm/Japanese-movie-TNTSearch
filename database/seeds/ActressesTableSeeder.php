<?php

use Illuminate\Database\Seeder;

class ActressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$actresses=[
    		['name'=>'Aiko Ito','picture'=>'aiko_ito.jpg'],
    		['name'=>'Haruka Suenaga','picture'=>'Haruka-Suenaga.jpg'],
    		['name'=>'Mio Takeuchi','picture'=>'Mio-Takeuchi.jpg'],
    		['name'=>'Yuka Hirata','picture'=>'Yuka-Hirata.jpg'],
    		['name'=>'Nao Nagasawa','picture'=>'Nao-Nagasawa.jpg'],
    	];
        DB::table('actresses')->insert($actresses);
    }
}
