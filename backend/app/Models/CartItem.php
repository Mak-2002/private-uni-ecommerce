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
        $data['price'] = number_format($this->attributes['price'], 2);
        if (!is_null($data['off'])) $data['off'] = number_format($this->attributes['off'], 2);
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
