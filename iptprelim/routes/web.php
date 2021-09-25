<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/sms/{user}', [SmsController::class, 'index'])->name('sms.index');

Auth::routes();

Route::get('/home', [
    HomeController::class, 'index'
])->name('home');

Route::post('/register-new', [RegisterController::class, 'register'])->name('register-new');
Route::get('/mail/mail', [MailController::class, 'mail'])->name('mail');
Route::get('/verify/{id}/{token}', [MailController::class, 'verify'])->name('verify');
