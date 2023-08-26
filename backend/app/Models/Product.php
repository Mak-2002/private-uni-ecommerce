<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasMany(ImageLink::class)->pluck('link');
    }

    public function subProducts()
    {
        return $this->hasManyThrough(Product::class, OfferProduct::class, 'id', 'id', 'offer_id', 'product_id');
    }
}
