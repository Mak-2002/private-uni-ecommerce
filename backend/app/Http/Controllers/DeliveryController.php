<?php

namespace App\Http\Controllers;

use App\Models\DeliveryOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeliveryController extends Controller
{

    //TODO: Testing Delivery Methods
    public function pickUpOrder(Request $request)
    {
        $deliveryOrder = DeliveryOrder::findOrFail($request->order_id);
        $deliveryOrder->update([
            'pick_up_date' => now(),
            'status' => DeliveryOrder::STATUS['picked_up'],
            'delivery_user_id' => Auth::user()->id,
        ]);
        return response()->json([
            'message' => 'تم اختيار الطلب للقيام بتوصيله',
        ]);
    }

    public function cancelPickUp(Request $request)
    {
        $deliveryOrder = DeliveryOrder::findOrFail($request->order_id);
        $deliveryOrder->update([
            'pick_up_date' => null,
            'status' => DeliveryOrder::STATUS['placed'],
            'delivery_user_id' => null,
        ]);
        return response()->json([
            'message' => 'تم إلغاء اختيار الطلب',
        ]);
    }

    public function deliverOrder(Request $request)
    {
        $deliveryOrder = DeliveryOrder::findOrFail($request->order_id);
        $deliveryOrder->update([
            'delivery_date' => now(),
            'status' => DeliveryOrder::STATUS['delivered'],
        ]);
        return response()->json([
            'message' => 'تم تأكيد توصيل الطلب',
        ]);
    }

    public function index(Request $request)
    {
        return response()->json(DeliveryOrder::get());
    }

    public function show(Request $request, DeliveryOrder $order)
    {
        return response()->json($order);
    }
}
