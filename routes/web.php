<?php

use App\Models\Menu;
use App\Models\OrderDetail;
use App\Models\Order;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OrderController;

// Home Route
Route::get('/', function () {
    $menus = Menu::all();
    return view('home', [
        "pageTitle" => "FoodDash",
        "menus" => $menus,
    ]);
})->name('home');

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register')->middleware('auth');
Route::post('/register', [RegisterController::class, 'processRegister'])->middleware('auth');

Route::get('/landing', function () {
    return view('landing', [
        "pageTitle" => "FoodDash"
    ]);
});

Route::middleware('redirect.guest')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth')->name('profile');

// Detail Menu Route
Route::get('/detailMenu/{id}', function ($id) {
    $menu = Menu::find($id); 
    if (!$menu) {
        abort(404, 'Menu not found');
    }
    return view('detailMenu', [
        'pageTitle' => 'Detail Menu',
        'menu' => $menu
    ]);
});

// Checkout Routes
Route::get('/checkout/{id}', [CheckoutController::class, 'showCheckout'])->name('checkout.show');
Route::post('/checkout/save', [CheckoutController::class, 'saveOrder'])->name('checkout.save');

// Order Routes
Route::middleware('auth')->group(function () {
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    Route::get('/order/{id}', [OrderController::class, 'show'])->name('order.show');
})->name('order');  

// Order Detail Routes
Route::get('/orderDetail/{id}', function ($id) {
    $orderDetail = OrderDetail::with('menu', 'order')->find($id);
    if (!$orderDetail) {
        abort(404, 'Order not found');
    }

    return view('orderDetail', [
        'pageTitle' => 'Order Detail',
        'orderDetail' => $orderDetail
    ]);
});

// About Page Route
Route::get('/about', function () {
    return view('about', [
        "pageTitle" => "About Page"
    ]);
});