<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Menu;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('orderDetails.menu')
            ->where('customer_id', auth()->id())
            ->get();

        return view('order', [
            "pageTitle" => "Order Page",
            "orders" => $orders,
        ]);
    }

    public function show($id)
    {
        $orderDetail = OrderDetail::with('menu', 'order')->find($id);
        if (!$orderDetail) {
            abort(404, 'Order not found');
        }

        $order = $orderDetail->order;

        return view('orderDetail', [
            'pageTitle' => 'Order Detail',
            'orderDetail' => $orderDetail,
        ]);
    }
}
