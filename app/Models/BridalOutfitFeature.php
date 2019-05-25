<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BridalOutfitFeature extends Model
{

    protected $fillable = ['vendor_id', 'feature_1', 'feature_2', 'feature_3', 'feature_4', 'feature_5', 'feature_6', 'feature_7', 'feature_8', 'type_1', 'type_2', 'type_3', 'type_4', 'type_5', 'type_6'];

    public function vendor()
    {
        return $this->belongsTo('App\Models\vendors', 'vendor_id');
    }

}
