<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vendors extends Model
{
    /**
     * @var string
     */
    protected $table = 'vendors';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function packages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(packages::class, 'vendors_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(vendor_image::class, 'vendors_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function features(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(vendor_features::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wishlist(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(wishlist::class, 'vendors_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rating(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(rating::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custom_order(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(custom_order::class, 'vendor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catagory(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(catagory::class, 'catagory_id');
    }
}
