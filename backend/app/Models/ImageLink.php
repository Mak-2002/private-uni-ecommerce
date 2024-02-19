<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageLink extends Model
{
    public function getLinkAttribute()
    {
        return env('APP_URL') .  "/images/" . $this->attributes['link'];
    }

    use HasFactory;
}
