<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function ship(Request $request, $orderId)
    {
        $order = Order::findOrFail($orderId);

        // Доставка заказа...

        Mail::to($request->user())->send(new OrderShipped($order));
    }
}
}
