<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        // dd($request->all());
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        $customMessages = [
            'email.required' => 'Email is required.',
            'email.email' => 'Email is already taken.',
            'password.required' => 'Password is required.',
        ];


        $validator = Validator::make($request->all(), $rules, $customMessages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->except('password'));
        }

        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return redirect()->back()->withInput($request->except('password'))->withErrors(['email' => 'This email is not registered, please use a registered email.']);
        }


        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            if (auth()->user()->role == 'user') {
            return redirect()->route('list_barang_user')->with('success_login', 'You have successfully logged in.');
            } else if (auth()->user()->role == 'admin') {
            return redirect()->route('dashboard')->with('success_login', 'You have successfully logged in.');
            } else {
            return redirect()->route('login')->with('error', 'Incorrect email or password.');
            }
        }

        return redirect()->back()->withInput($request->except('password'))->withErrors(['password' => 'The email or password you entered is incorrect.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success_login', 'Successfully logged out');
    }
}
