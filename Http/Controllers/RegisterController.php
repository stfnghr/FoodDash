<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    // Menampilkan form registrasi tambahan
    public function showRegisterForm()
    {
        return view('auth.register', ['pageTitle' => 'Complete Registration']);
    }

    // Memproses data registrasi tambahan
    public function processRegister(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|numeric',
        ]);

        // Menyimpan data tambahan untuk user yang sudah login
        $user = auth()->user();
        $user->update([
            'name' => $request->name,
        ]);

        // Menambahkan data customer jika belum ada
        $user->customer()->create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        // Mengarahkan pengguna ke halaman utama setelah berhasil
        return redirect()->route('home')->with('success', 'Registration completed!');
    }
}
