<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            echo 'if aft';
            return redirect()->route('home');
        }
        return back()->withErrors(['username' =>'Giriş yapılamadı Username ve Password kontrolü yapınız.']);
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
