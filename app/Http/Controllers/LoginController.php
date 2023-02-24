<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login', [
            'hal' => 'Login'
        ]);
    }

    public function masuk(Request $request)
    {
        $dataLogin = $request->validate([
            'username' => 'required|min:3|max:255',
            'password' => 'required|min:8|max:255'
        ]);

        if (Auth::attempt($dataLogin)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginGagal', 'Login Falied!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
