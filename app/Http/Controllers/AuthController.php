<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register() 
    {
        return view('register');
    }
    public function simpan(Request $request)
    {
        User::create([
            'nik_user' => $request->nik_user,
            'nama_user' => $request->nama_user,
            'no_hp' => $request->no_hp,
            'password' => bcrypt($request->password)
        ]);
        return redirect('/');
    }
    public function login()
    {
        return view('login');
    }
    public function ceklogin(Request $request)
    {
        if (Auth::attempt([
        'no_hp' => $request->no_hp, 
        'password' => $request->password
    ])){
        return redirect('/home');
    }else{
        return redirect('/');
    }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
