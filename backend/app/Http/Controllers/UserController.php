<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\DeliveryOrder;
use App\Models\Favorite;
use App\Models\Product;
use App\Models\RatingRecord;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use PhpParser\Node\Expr\Cast\String_;

class UserController extends Controller
{
    public function buy(Request $request)
    {
        $currentUser = Auth::user();
        $cartData = json_decode($this->getCart()->content());

        if (!$currentUser->cart()->exists())
            throw ValidationException::withMessages([
                'السلة فارغة',
            ]);

        // Create the delivery order
        $deliveryOrder = DeliveryOrder::create([
            'user_id' => $currentUser->id,
            'user_name' => $currentUser->name,
            'phone' => $request->phone,
            'address' => strtoupper($request->unit_number),
            'placement_date' => now(),
            'status' => DeliveryOrder::STATUS['placed'],
            'delivery_cost' => $cartData->delivery_cost,
            'total_cost' => $cartData->total,
        ]);

        // Add items in cart to the order and remove them from cart
        $currentUser->cart()->update([
            'delivery_order_id' => $deliveryOrder->id,
            'user_id' => null
        ]);

        return response()->json([
            'message' => 'تم شراء المنتجات بنجاح, بانتظار التوصيل',
        ]);
    }

    public function getUser(Request $request)
    {
        return $request->user();
    }

    public function rateProduct(Request $request)
    {
        $currentUser = Auth::user();
        $product = Product::findOrFail($request->product_id);
        $ratingRecord = RatingRecord::where('user_id', $currentUser->id)
            ->where('product_id', $product->id)->first();
        if (is_null($ratingRecord)) {
            RatingRecord::create([
                'user_id' => $currentUser->id,
                'product_id' => $product->id,
                'star_count' => $request->rating,
            ]);
            $product->rating_sum += $request->rating;
            $product->rating_count++;
        } else {
            $product->rating_sum += $request->rating - $ratingRecord->star_count;
            $ratingRecord->update(['star_count' => $request->rating]);
        }
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
            'total_price_of_items' =>  $totalPrice,
            'delivery_cost' => config('variables.delivery_cost'),
            'total' => $totalPrice + config('variables.delivery_cost'),
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
            $cartItem->update(['quantity' =>    $cartItem->quantity + $change]);
            $responseContent['message'] = 'تم تعديل كمية المنتج في السلة';
            $responseContent['quantity_in_cart'] = $cartItem->quantity;
            if ($cartItem->quantity == 0) {
                $cartItem->delete();
                $responseContent['message'] = 'تمت إزالة المنتج من السلة';
                unset($responseContent['quantity_in_cart']);
            }
        }
        $product->update(['quantity' => $product->quantity - $change]);
        return response()->json($responseContent);
    }
}
