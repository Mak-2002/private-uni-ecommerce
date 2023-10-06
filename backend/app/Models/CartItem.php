<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{

    protected static function booted()
    {
        static::saving(function ($model) {
            $relatedProduct = $model->load('product')->product;
            $model->price = $model->quantity * (is_null($relatedProduct->off) ?
                $relatedProduct->price
                : $relatedProduct->off);
        });
    }
    public function toArray()
    {

        $data = $this->product->toArray();
        $data['quantity'] = $this->attributes['quantity'];
        $data['price'] = $this->attributes['price'];
        unset($data['off']);
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
