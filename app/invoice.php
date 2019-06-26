<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    //

    public function tag(){
        return $this->belongsTo('App\Query','query_id');
    }
}
