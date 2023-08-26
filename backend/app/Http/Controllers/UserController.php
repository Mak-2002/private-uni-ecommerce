<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function rate(Request $request, Product $product)
    {
        $product->rating_sum += $request->rating;
        $product->rating_count++;
        $product->save();
        return response()->json([
            'message' => "Product #{{$product->id}} Rated Successfully",
        ]);
    }

    public function addOrRemoveFavorite(Product $product)
    {
        $currentUser = Auth::user();
        if ($currentUser->favorites()->where('product_id', $product->id)->exists()) {
            $currentUser->favorites()->detach($product->id);
            return response()->json([
                'message' => "Product #{{$product->id}} Removed from Favorites Successfully"
            ]);
        } else {
            $currentUser->favorites()->attach($product->id);
            return response()->json([
                'message' => "Product #{{$product->id}} Added to Favorites Successfully"
            ]);
        }
    }

    public function getFavoriteProducts(Request $request)
    {
        return response()->json(
            Auth::user()->favorites
        );
    }
}
