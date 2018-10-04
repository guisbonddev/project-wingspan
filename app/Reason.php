<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reason extends Model
{
	public function NAS(){
    	 return $this->hasMany('App\NAS');
    }
}
