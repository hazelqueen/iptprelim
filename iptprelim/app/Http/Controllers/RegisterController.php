<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function register(Request $request) {
        $request->validate([
            'name' => ['string', 'required'],
            'email' => ['string', 'required'],
            'password' => ['required', 'string'],
            'contact' => ['string', 'required'],
        ]);

        $token = Str::random(24);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'contact' => $request['contact'],
            'remember_token' => $token,
        ]);

        Mail::send('/mail/mail', ['content' => $user], function($mail) use ($request) {
            $mail->to($request->email);
            $mail->subject('Email Verification');
            $mail->from(env('MAIL_FROM_ADDRESS'));
        });

        return redirect(route('sms.index', [$user->id]));
    }
}
