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
            return redirect()->intended('/member');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
