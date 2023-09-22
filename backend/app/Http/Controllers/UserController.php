<?php

namespace App\Http\Controllers;

use App\Http\Requests\PurchaseRequest;
use App\Models\CartItem;
use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Floats;
use PhpParser\Node\Expr\Cast\Double;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class UserController extends Controller
{
    public function buy(PurchaseRequest $request)
    {
        $currentUser = Auth::user();
        $currentUser->cart()->delete();
        //TODO: continue purchase process
    }

    public function getUser(Request $request)
    {
        return $request->user();
    }

    public function rateProduct(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $product->rating_sum += $request->rating;
        $product->rating_count++;
        $product->save();
        return response()->json([
            'message' => "Product #{$product->id} Rated Successfully",
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
                'message' => "Product #{$product->id} Removed from Favorites"
            ]);
        } else {
            Favorite::create([
                'user_id' => $currentUser->id,
                'product_id' => $product->id,
            ]);
            return response()->json([
                'message' => "Product #{$product->id} Added to Favorites"
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
        $totalPrice = 0;
        $cart = Auth::user()->cart;
        foreach ($cart as $cartItem) {
            $cartItem->price = $cartItem->product->price * $cartItem->quantity;
            if (isset($cartItem->product->off)) {
                $cartItem->off = $cartItem->product->off * $cartItem->quantity;
                $totalPrice += $cartItem->off;
            } else
                $totalPrice += $cartItem->price;
        }

        return response()->json([
            'total_price' =>  number_format($totalPrice, 2),
            'items' => $cart,
        ]);
    }

    public function changeProductQuantityInCart(Request $request)
    {
        $currentUser = Auth::user();
        $product = Product::findOrFail($request->product_id);
        $change = $request->input('change', 1);
        $cartItem = $currentUser->cart()->where('product_id', $product->id)->first();

        if (is_null($cartItem) && $change <= 0)
            return response()->json(['message' => 'المنتج بالفعل غير موجود بالسلة']);
        if ($product->quantity - $change < 0)
            return response()->json(['message' => 'لم يتبقَ من هذا المنتج في المتجر']);

        if (is_null($cartItem)) {
            CartItem::create([
                'user_id' => $currentUser->id,
                'product_id' => $product->id,
                'quantity' => $change,
            ]);
            $responseContent['message'] = 'تمت إضافة المنتج إلى السلة';
            $responseContent['quantity_in_cart'] = $change;
        } else {
            $cartItem->update(['quantity' => $cartItem->quantity + $change]);
            $responseContent['message'] = 'تم تعديل كمية المنتج في السلة';
            $responseContent['quantity_in_cart'] = $cartItem->quantity;
            if($cartItem->quantity == 0) {
                $cartItem->delete();
                $responseContent['message'] = 'تمت إزالة المنتج من السلة';
                unset($responseContent['quantity_in_cart']);
            }
        }
        $product->update(['quantity' => $product->quantity - $change]);
        return response()->json($responseContent);
    }
}
