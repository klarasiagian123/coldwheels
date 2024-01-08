<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getIndex()
    {
        return view('site.login.index');
    }

    public function postLogin(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Jika autentikasi berhasil
        return view('site.home.index');
    }

    // Jika autentikasi gagal
    return back()->withErrors(['email' => 'Invalid credentials']);
}
}

