<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpireQuery extends Model
{
    //
    protected $table = 'expire_queries';
    protected $fillable = ['user_id','category_id','vendor_id','product_id','quantity',
        'tag_id','event_date','message','status'];

    public function vendors(){
        return $this->belongsTo('App\Models\vendors','vendor_id');
    }
    public function catagory(){
        return $this->belongsTo('App\Models\catagory','category_id');
    }
    public function package(){
        return $this->belongsTo('App\Models\packages');
    }
    public function product(){
        return $this->belongsTo('App\Models\products','product_id');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    /*Nir-edit*/
    public function tag(){
        return $this->belongsTo('App\Tag');
    }
}
