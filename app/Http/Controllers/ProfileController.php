<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $customer = $user->customers;

        return view('profile', [
            'user' => $user,
            'customer' => $customer,
        ]);
    }
}
