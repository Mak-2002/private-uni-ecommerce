<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'off',
        'about',
        'isAvailable',
        'quantity',
    ];

    public function scopeIsOffer($query)
    {
        return $query->whereHas('subProducts');
    }

    public function getRatingAttribute()
    {
        if ($this->rating_count == 0) return null; // Could also be set to 0
        return number_format(
            $this->rating_sum / $this->rating_count,
            1
        );
    }

    public function images()
    {
        return $this->hasMany(ImageLink::class)->pluck('link');
    }

    public function subProducts()
    {
        return $this->hasManyThrough(Product::class, OfferProduct::class, 'id', 'id', 'offer_id', 'product_id');
    }
}
