<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('user-auth.login');
    }

    public function login(Request $request) 
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) 
        {
            return redirect()->intended('admin/dashboard');
        }

        return redirect()->route('admin.login')->with('error', 'Email Or Password Is Incorrect.');
    }

    public function dashboard()
    {
        return view('user-auth.dashboard');
    }
}
