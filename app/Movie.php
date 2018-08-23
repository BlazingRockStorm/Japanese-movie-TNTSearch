<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table='movies';
    public $timestamps = false;

    public function actress()
    {
    	return $this->belongsTo('App\Movie');
    }    
}
