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
                'message' => "Product #{{$product->id}} Removed from Favorites"
            ]);
        } else {
            $currentUser->favorites()->attach($product->id);
            return response()->json([
                'message' => "Product #{{$product->id}} Added to Favorites"
            ]);
        }
    }

    public function getFavoriteProducts(Request $request)
    {
        return response()->json(
            Auth::user()->favorites
        );
    }

    public function getCart()
    {
        return response()->json(
            Auth::user()->cart
        );
    }

    public function changeProductQuantityInCart(Request $request, Product $product)
    {
        $change = $request->input('change', 1);
        $cartItem = Auth::user()->cart()->where('product_id', $product->id)->first();

        if (!$cartItem) {
            $cartItem = Auth::user()->cart()->create([
                'product_id' => $product->id,
                'quantity' => $change,
            ]);
            $data['message'] = "Product #{$product->id} Added to Cart";
        } else {
            $newQuantity = $cartItem->quantity + $change;

            if ($newQuantity <= 0) {
                $cartItem->delete();
                $message = "Product #{$product->id} Removed from Cart";
            } else {
                $cartItem->update(['quantity' => $newQuantity]);
                $data['message'] = "Product #{$product->id} Quantity Modified in Cart";
                $data['remaining'] = $cartItem->quantity;
            }
        }

        return response()->json($data);
    }
}
