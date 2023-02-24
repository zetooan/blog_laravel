<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register', [
            'hal' => 'Register'
        ]);
    }
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        $validasiData['password'] = bcrypt($validasiData['password']);
        User::create($validasiData);
        return redirect('/login')->with('berhasil', 'Registration succesfull! Please login');
    }
}
