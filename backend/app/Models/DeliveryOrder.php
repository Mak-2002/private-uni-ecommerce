<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryOrder extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('available', function (Builder $builder) {
            $builder->where('status', 1);
        });
    }

    const STATUS = [
        'placed' => 1,
        'picked_up' => 2,
        'delivered' => 3,
    ];

    protected $fillable = [
        'user_id',
        'user_name',
        'phone',
        'address',
        'delivery_user_id',
        'total_cost',
        'delivery_cost',
        'placement_date',
        'pick_up_date',
        'delivery_date',
        'notes',
        'status',
    ];

    public function Items()
    {
        return $this->hasMany(CartItem::class);
    }
}
