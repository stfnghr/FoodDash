<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Menu;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    // Menampilkan halaman checkout
    public function showCheckout($id)
    {
        $menu = Menu::find($id);
        if (!$menu) {
            abort(404, 'Menu not found');
        }

        $startDate = Carbon::today()->format('d/m/Y');
        $endDate = Carbon::today()->addMonth()->format('d/m/Y');

        return view('checkout', [
            "pageTitle" => "Checkout",
            "menu" => $menu,
            "price" => $menu->price,
            "startDate" => $startDate,
            "endDate" => $endDate
        ]);
    }

    // Menyimpan order ke dalam database
    public function saveOrder(Request $req)
    {
        $req->validate([
            'quantity' => 'required|integer|min:1',
            'payment_method' => 'required|string',
            'menu_id' => 'required|exists:menus,id', // Memastikan menu_id valid
        ]);

        // Menghitung total harga berdasarkan quantity
        $totalPrice = $req->quantity * $req->menu_price; // Harga per item sudah dikirim oleh blade

        $order = new Order;
        $order->customer_id = auth()->id(); // Customer yang login
        $order->order_date = now();
        $order->total_price = $totalPrice;
        $order->payment_status = 'Pending';
        $order->payment_date = null;
        $order->save();

        $orderDetail = new OrderDetail;
        $orderDetail->order_id = $order->id;
        $orderDetail->menu_id = $req->menu_id;
        $orderDetail->quantity = $req->quantity;
        $orderDetail->save();

        return redirect('/order'); // Redirect ke halaman order setelah sukses
    }
}
