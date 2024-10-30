<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\auth;

class LoginController extends Controller
{
    public function showLogin()
    {
    if (Auth::check ()) {
        return redirect('/')->with(['error' => 'anda sedang login']);
    }else{
        return view('login');
    }
}
    public function actionlogin(request $request)
{
    $data =[
        'email' => $request->email,
        'password' => $request->password,
    ];

    if (Auth::Attempt($data)) {
        return redirect('/')->with(['success' => 'login berhasil']);
    } else {
        return redirect('/login')->with(['error' => 'email atau password salah!!!']);
    }
}
public function actionlogout()
{
    Auth::logout();
    return redirect('/login')->with(['success' => 'anda berhasil logout']);
}
}