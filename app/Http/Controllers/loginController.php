<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            // Authentication passed...
            // dump(Auth()->guard()->user()->role);
            // die;
            if (Auth()->guard()->user()->role == 'admin') {
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/member');
            }
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
