<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SmsController extends Controller
{
    //
    public function index(User $user) {
        Nexmo::message()->send([
            'to' => $user->contact,
            'from' => '+639075181814',
            'text' => 'Welcome ' . $user->name . ' to ' . env('APP_NAME') . '!'
        ]);

        return redirect('login')->with('Error', 'Check your email for verification!');
    }
}
