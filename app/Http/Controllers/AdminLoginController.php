<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('dashboards.login.index');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required| email:dns',
            'password' => 'required',
        ]);


        if (Auth::guard('admin')->attempt($credentials)) {

            // dd($request);
            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back();
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
