<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actress extends Model
{
    protected $table='actresses';
    public $timestamps = false;

    public function movies
    {
    	return $this->hasMany('App\Movie');
    }
}
