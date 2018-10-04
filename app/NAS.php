<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NAS extends Model
{
    protected $table = 'national_programs';

    public function reasons(){
    	 return $this->hasOne('App\Reason','id');
    }

}
