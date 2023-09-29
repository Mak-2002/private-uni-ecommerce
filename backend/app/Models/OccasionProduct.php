<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OccasionProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'occasion_id',
    ];
}
