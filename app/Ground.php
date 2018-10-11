<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ground extends Model
{
    protected $table = 'ground_stops';

    public function reasons(){
    	 return $this->hasOne('App\Reason','id');
    }
}
