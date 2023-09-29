<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Product};


class ProductController extends Controller
{
    public function index(Request $request)
    {
        $filters = $request->all();
        // $products = Product::available()->filter($filters)->get();
        $products = Product::filter($filters)->get();
        return response()->json($products);
    }

    public function show(Request $request, Product $product)
    {
        return response()->json($product);
    }

    //TODO: Offers based on number of guests attending the occasion
    

    //TODO: System Analysis and Report
}
