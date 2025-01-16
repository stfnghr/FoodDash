<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Menu;
use App\Models\Customer;
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

    // Ambil data customer yang sedang login
    $customer = Customer::where('user_id', auth()->id())->first();
    if (!$customer) {
        return redirect()->route('profile.edit')->with('error', 'Complete your profile before checkout.');
    }

    // Gunakan old('start_date') jika ada, jika tidak gunakan today() sebagai default
    $startDate = old('start_date', Carbon::today()->format('d-m-Y')); // Gunakan old() agar bisa mengisi nilai yang sudah dipilih sebelumnya
    $endDate = Carbon::parse($startDate)->addMonth()->format('d-m-Y'); // Menghitung 1 bulan setelah startDate

    return view('checkout', [
        "pageTitle" => "Checkout",
        "menu" => $menu,
        "price" => $menu->price,
        "startDate" => $startDate,
        "endDate" => $endDate,
        "customer" => $customer
    ]);
}

public function saveOrder(Request $req)
{
    $validatedData = $req->validate([
        'menu_id' => 'required|exists:menus,id',
        'amount' => 'required|integer|min:1',
        'payment_method' => 'required|string',
        'start_date' => 'required|date_format:Y-m-d',
        'end_date' => 'required|date_format:d-m-Y',
        'notes' => 'nullable|string',
    ]);    

    // Debugging untuk memeriksa semua data input
    // dd($req->all());

    $menu = Menu::find($req->menu_id);
    if (!$menu) {
        return redirect()->back()->with('error', 'Invalid menu selected.');
    }

    $totalPrice = $req->amount * $menu->price;

    $startDate = Carbon::createFromFormat('Y-m-d', $req->start_date);
    $endDate = Carbon::createFromFormat('d-m-Y', $req->end_date);

    $order = new Order;
    $order->customer_id = auth()->id();
    $order->order_date = now();
    $order->total_price = $totalPrice;
    $order->payment_status = 'Pending';
    $order->payment_date = now(); 
    $order->notes = $req->notes;
    $order->save();

    $courier_id = \App\Models\Courier::inRandomOrder()->first()->id;

    $orderDetail = new OrderDetail;
    $orderDetail->order_id = $order->id;
    $orderDetail->menu_id = $req->menu_id;
    $orderDetail->courier_id = $courier_id; 
    $orderDetail->amount = $req->amount;
    $orderDetail->price = $totalPrice;
    $orderDetail->delivery_date = $startDate;
    $orderDetail->delivery_status = 'Preparing';
    $orderDetail->save();

    session([
            'order_id' => $order->id,
            'start_date' => $req->start_date,
            'end_date' => $req->end_date,
            'payment_status' => $order->payment_status,
            // 'payment_method' => $req->payment_method,
    ]);

    return redirect('order')->with('success', 'Order successfully created!');
}
}