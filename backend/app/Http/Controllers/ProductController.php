<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Product};


class ProductController extends Controller
{
    public function rate(Request $request, Product $product)
    {
        $product->rating_sum += $request->rating;
        $product->rating_count++;
        $product->save();
        return $this->successResponse("Product #{{$product->id}} Rated Successfully");
    }
}
