<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory;

    // TEST: seasonal offers
    protected static function boot()
    {
        parent::boot();

        $monthDay = Carbon::now()->format('m-d');
        static::addGlobalScope('WithSeasonalOffers', function (Builder $builder) use ($monthDay) {
            $builder->whereNull('availability_start_date')->orWhere(
                function ($builder) use ($monthDay) {
                    $builder->whereRaw("DATE_FORMAT(availability_start_date, '%m-%d') <= ?", [$monthDay])
                        ->whereRaw("DATE_FORMAT(availability_end_date, '%m-%d') >= ?", [$monthDay]);
                }
            );
        });
    }

    public function toArray()
    {
        $this->loadMissing('subProducts');
        $data = parent::toArray();

        if ($this->subProducts->count() > 0)
            $data['sub_products'] = $this->subProducts->toArray();

        else {
            unset($data['sub_products']);
            $this->unsetRelation('subProducts');
        }
        return $data;
    }

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
        'isAvailable',
        'current_users_rating',
    ];

    protected $hidden = [
        'rating_count',
        'rating_sum',
        'created_at',
        'updated_at',
        'images',
    ];

    protected $with = [
        // 'subProducts',
        //FIXME: add subProducts relation without causing an infinite loop
    ];

    public function getImageLinksAttribute()
    {
        // Get only the link from the ImageLink model
        return $this->images->pluck('link');
    }

    public function getIsFavoriteAttribute()
    {
        return Favorite::where('user_id', Auth::user()->id)->where('product_id', $this->id)->exists();
    }

    public function getIsAvailableAttribute()
    {
        return $this->quantity != 0;
    }
    public function getRatingAttribute()
    {
        if ($this->rating_count == 0) return null; // Could also be set to 0
        return number_format(
            $this->rating_sum / $this->rating_count,
            1
        );
    }

    public function getCurrentUsersRatingAttribute()
    {
        $ratingRecord = RatingRecord::where('user_id', Auth::user()->id)->where('product_id', $this->id)->first();
        return is_null($ratingRecord) ? null : number_format($ratingRecord->star_count, 1);
    }

    public function scopeAvailable($query)
    {
        return $query->where('isAvailable', 1);
    }

    public function scopeOffers($query)
    {
        return $query->whereHas('subProducts');
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

    public function subProducts()
    {
        return $this->hasManyThrough(
            Product::class,
            OfferProduct::class,
            'offer_id',
            'id',
            'id',
            'sub_product_id',
        );
    }
}
