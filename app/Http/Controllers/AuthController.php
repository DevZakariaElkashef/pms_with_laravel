<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequist;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerpage ()
    {
        return view('auth.register');
    }
    public function register (RegisterRequist $request)
    {
        $user = User::make($request->validated());
        $user->password = Hash::make($request->password);
        $user->save();


        Auth::login($user);

        // return redirect()->route('home');
        // return route('home');
        return to_route('home');
    }


    public function logout(Request $request)
    {
        $user = $request->user();

        Auth::logout($user);

        return to_route('home');
    }

    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return to_route('home');
        } else {
            return back();
        }
    }
}
