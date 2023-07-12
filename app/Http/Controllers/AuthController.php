<?php

namespace App\Http\Controllers;

use illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
    function showLogin()
    {
        return view('auth.login');
    }
    function loginProcess()
    {
        if (Auth::attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('admin/beranda')->with('success', 'Login Berhasil');
        } else {
            return back()->with('danger', 'Login Gagal, Silahkan cek email dan password anda');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
