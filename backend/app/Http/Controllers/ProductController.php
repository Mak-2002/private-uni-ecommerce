<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Occasion, Product};


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

    public function suggestBasedOnOccasion(Request $request)
    {
        //TODO: Continue product suggestion based on occasion
        $occasion = Occasion::findOrFail($request->occasion_id);
        $people_attending = $request->people_attending;
        return response()->json([]);
    }


    //TODO: System Analysis and Report
}
