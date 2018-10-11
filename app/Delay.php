<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delay extends Model
{
    protected $table = 'delay_info';

    public function reasons(){
    	 return $this->hasOne('App\Reason','id');
    }
}
