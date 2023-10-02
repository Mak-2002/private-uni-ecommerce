<?php

namespace App\Http\Controllers;

use App\Models\DeliveryOrder;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{

    //TODO: Testing Delivery Methods
    public function pickUpOrder(Request $request)
    {
        $deliveryOrder = DeliveryOrder::findOrFail($request->order_id);
        $deliveryOrder->update([
            'pick_up_date' => now(),
            'status' => DeliveryOrder::STATUS['picked_up'],
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
            'message' => 'تم تأكيد توصيل الطلب بنجاح',
        ]);
    }
}
