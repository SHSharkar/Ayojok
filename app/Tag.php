<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function queries(){
        return $this->hasMany('App\Query','tag_id');
    }
}
