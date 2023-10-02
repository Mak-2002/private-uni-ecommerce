<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
