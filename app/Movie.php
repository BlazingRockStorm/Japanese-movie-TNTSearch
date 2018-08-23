<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Movie extends Model
{
	use Searchable;

    public $asYouType = true;//chỉ cần gõ 1 kí tự là cho ra các kết quả chứa kí tự ấy
    protected $table='movies';
    public $timestamps = false;

	/**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...
        $array['name'] = $this->name;
        $array['actress'] = $this->actress['name'];

        return $array;
    }

    public function actress()
    {
    	return $this->belongsTo('App\Actress');
    }    
}
