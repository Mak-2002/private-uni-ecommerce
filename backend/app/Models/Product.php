<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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

    protected $appends = [
        'rating',
        'image_links',
        'isFavorite',
    ];

    protected $hidden = [
        'rating_count',
        'rating_sum',
        'created_at',
        'updated_at',
        'images',
        'pivot',
    ];

    // protected $with = [
    //     'subProducts',
    // ];

    public function getImageLinksAttribute()
    {
        // Get only the link from the ImageLink model
        return $this->images->pluck('link');
    }

    public function getIsFavoriteAttribute()
    {
        return Favorite::where('user_id', Auth::user()->id)->where('product_id', $this->id)->exists();
    }

    public function getRatingAttribute()
    {
        if ($this->rating_count == 0) return null; // Could also be set to 0
        return number_format(
            $this->rating_sum / $this->rating_count,
            1
        );
    }

    public function scopeAvailable($query)
    {
        return $query->where('isAvailable', 1);
    }

    public function scopeFilter($query, $filters)
    {
        $query->when($filters['category'] ?? false, function ($query, $category) {
            $query->where('category', $category);
        });
        return $query;
    }

    public function images()
    {
        return $this->hasMany(ImageLink::class);
    }
    //
    // public function scopeIsOffer($query)
    // {
    //     return $query->has('subProducts');
    // }

    // public function offers()
    // {
    //     return $this->belongsToMany(Product::class, 'offer_products', 'sub_product_id', 'offer_id');
    // }

    // public function subProducts()
    // {
    //     return $this->belongsToMany(Product::class, 'offer_products', 'offer_id', 'sub_product_id');
    // }
}
