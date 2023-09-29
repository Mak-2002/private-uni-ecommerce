<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occasion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    
    public function suggestedProducts()
    {
        return $this->hasManyThrough(
            Occasion::class,
            OccasionProduct::class,
            'occasion_id',
            'id',
            'id',
            'product_id',
        );
    }
}
