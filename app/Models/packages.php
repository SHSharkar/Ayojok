<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class packages extends Model
{
    protected $table = 'packages';

    protected $fillable = ['catagory_id', 'vendors_id', 'title', 'price', 'description', 'image'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catagory(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(catagory::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vendors(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(vendors::class);
    }

    /*public function querycart()
    {
        return $this->belongsTo('App\Models\querycart');
    }*/
}
