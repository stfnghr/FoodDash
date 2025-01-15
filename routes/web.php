<?php

use App\Models\Menu;
use App\Models\OrderDetail;
use App\Models\Order;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('landing', [
        "pageTitle" => "FoodDash"
    ]);
});

//Login Route
Route::get('/login', function () {
    return view('login', [
        "pageTitle" => "Log In"
    ]);
});
Route::post('/login', [UserController::class, 'login'])->name('login');

// Signup Route
Route::get('/signup', function () {
    return view('signup', [
        "pageTitle" => "Sign Up"
    ]);
});
Route::post('/signup', [UserController::class, 'signup'])->name('signup');

// Register Route
Route::get('/register', function () {
    return view('register', [
        "pageTitle" => "Register - FoodDash"
    ]);
})->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register');

// Home Route
Route::get('/home', function () {
    $menus = Menu::all();
    return view('home', [
        "pageTitle" => "Home Page",
        "menus" => $menus,
    ]);
})->name('home');

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
Route::get('/checkout/{id}', [CheckoutController::class, 'showCheckout'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'saveOrder'])->name('checkout.save');

// Order Routes
Route::get('/order', function () {
    $orders = Order::with('orderDetails.menu')->get();

    return view('order', [
        "pageTitle" => "Order Page",
        "orders" => $orders
    ]);
});

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

// Profile Route
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth')->name('profile');

// About Page Route
Route::get('/about', function () {
    return view('about', [
        "pageTitle" => "About Page"
    ]);
});

// Profile Pages Routes
Route::get('/profile', function () {
    return view('profile', [
        "pageTitle" => "Profile Page"
    ]);
});
Route::get('/editProfile', function () {
    return view('editProfile', [
        "pageTitle" => "Edit Profile"
    ]);
});
