<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageLink extends Model
{
    public function toArray()
    {
        $data = parent::toArray();
        $data['link'] = asset('images/' . $data['link']);
        // dd($data);
        
        return $data;
    }

    public function getLinkAttribute() {
        return asset('images/' . $this->attributes['link']);
    }

    use HasFactory;
}
