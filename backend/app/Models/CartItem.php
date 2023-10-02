<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    public function toArray()
    {
        $product = $this->product;
        $data = $product->toArray();
        $data['quantity'] = $this->attributes['quantity'];
        $data['price'] = $this->attributes['price'];
        if (!is_null($data['off'])) $data['off'] = $this->attributes['off'];
        return $data;
    }

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
    ];
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
