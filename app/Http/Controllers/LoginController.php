<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validate;
use Auth;

class LoginController extends Controller
{
    function index() {
        return view('login');
    }

    function checkLogin(Request $request) {
        $this->validate($request, [
            'email'     => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'     => $request->get('email'),
            'password'  => $request->get('password')
        );

        if (Auth::attempt($user_data)) {
            return redirect('login/success');
        } else {
            return back()->with('error', 'Wrong credentials');
        }
    }

    function successLogin() {
        return view('success_login');
    }

    function logout() {
        Auth::logout();
        return redirect('login');
    }
}
