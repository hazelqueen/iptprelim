<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MailController extends Controller
{
    //
    public function mail() {
        return view('/mail/mail');
    }

    public function verify($id, $token) {
        $user = User::find($id);

        if ($user->remember_token != $token) {
            return redirect('login')->with('Error', 'Token validation mismatch.');
        } else {
            $user->email_verified_at = date('Y-m-d H:i:s');

            $user->save();

            return redirect('login')->with('Success', 'Email successfully verified! You may now login.');
        }
    }
}
