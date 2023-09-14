<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function rateProduct(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $product->rating_sum += $request->rating;
        $product->rating_count++;
        $product->save();
        return response()->json([
            'message' => "Product #{{$product->id}} Rated Successfully",
        ]);
    }

    public function toggleFavorite(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $currentUser = Auth::user();
        $favoriteObject = Favorite::where('user_id', $currentUser->id)->where('product_id', $product->id)->first();
        if ($favoriteObject) {
            $favoriteObject->delete();
            return response()->json([
                'message' => "Product #{{$product->id}} Removed from Favorites"
            ]);
        } else {
            Favorite::create([
                'user_id' => $currentUser->id,
                'product_id' => $product->id,
            ]);
            return response()->json([
                'message' => "Product #{{$product->id}} Added to Favorites"
            ]);
        }
    }

    public function getFavorites(Request $request)
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

    public function changeProductQuantityInCart(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
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
