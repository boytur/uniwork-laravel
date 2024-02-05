<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    function login()
    {
        return view('login');
    }

    public function login_process(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $user = Auth::user();

            return redirect()->intended('/home');
        } else {
            return Redirect::to('login')->with('error', 'Invalid email or password');
        }
    }


    function logout()
    {
        Auth::logout();
        return Redirect::to('login');
    }

    function register_view()
    {
        return view('register');
    }

    function register_process(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $data = $req->all();
        $data['password'] = Hash::make($data['password']); // Hash the password

        User::create($data);

        return Redirect::to('login');
    }
}
