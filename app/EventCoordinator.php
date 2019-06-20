<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventCoordinator extends Model
{
    //

    protected $table = 'event_coordinators';

    //protected $fillable = ['name','email','phone','message'];

    protected $data = ['created_at','updated_at'];

    public function user(){
        return $this->belongsTo('App\user');
    }
}
