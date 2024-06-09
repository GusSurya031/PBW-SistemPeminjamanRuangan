<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'nim' => 'required| max:10| regex:/^([0-9\s\-\+\(\)]*)$/| unique:users',
            'email' => 'required| email:dns| max:255',
            'name' => 'required| min:4| max:255',
            'phone_number' => 'required| regex:/^([0-9\s\-\+\(\)]*)$/| min:10 ',
            'gender' => 'required| in:laki-laki,perempuan',
            'password' => 'required| min:5',
            'password_confirmation' => 'required| same:password',
        ]);
        $validated['password'] = Hash::make($validated['password']);
        // dd($validated);
        User::create($validated);

        return redirect('/login')->with('success', 'Registered Successfully, Please Login');
    }
}
