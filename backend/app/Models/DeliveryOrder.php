<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PharIo\Version\BuildMetaData;

class DeliveryOrder extends Model
{
    use HasFactory;

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

    public function scopeAvailable($query)
    {
        return $query->where('status', 1);
    }

    public function Items()
    {
        return $this->hasMany(CartItem::class);
    }
}
