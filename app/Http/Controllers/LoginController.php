<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.auth_login', [
            'title' => 'Login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin-dashboard');
        }

        return back()->with('loginError', 'User atau password anda salah!');
        // dd('berhasil Login');
    }

    public function adminHome()
    {
        return view('admin.dashboard.dashboard');
    }
}
