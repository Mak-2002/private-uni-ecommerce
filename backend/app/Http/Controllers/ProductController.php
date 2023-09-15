<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Product};


class ProductController extends Controller
{
    public function getProducts(Request $request)
    {
        $filters = $request->all();
        $products = Product::available()->filter($filters)->get();
        return response()->json($products);
    }
}
