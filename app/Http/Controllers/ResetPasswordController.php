<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class ResetPasswordController extends Controller
{
    public function request() {
        return view('auth.forgotpassword');
    }
    public function sendEmail(Request $request) {
        $rules = [
            'email' => 'required|email|exists:users',
        ];
        $message = [
            'email.required' => 'Email is required',
            'email.email' => 'Emails must be valid',
            'email.exists' => 'Email not registered',
        ];

        $validation = $request->validate($rules, $message);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status === Password::RESET_LINK_SENT) {
            return back()->with(['status' => __($status)])->with('reset', 'Reset link has been sent!');
        } else {
            return back()->withErrors(['email' => __($status)]);
        }
    }

    public function resetPassword($token) {
        return view('auth.resetpassword', ['token' => $token, 'email' => request()->email]);
    }

    public function updatePassword(Request $request) {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('status', __($status))->with('reset', 'Password has been reset successfully!');
        } else {
            return back()->withErrors(['email' => [__($status)]]);
        }
    }
}
