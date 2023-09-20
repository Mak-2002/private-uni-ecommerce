<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    public function toArray() {
        $data = Product::find($this->product_id)->toArray();
        $data['quantity'] = $this->attributes['quantity'];
        return $data;
    }

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
    ];
    use HasFactory;
}
