<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('', [RegisterUserController::class, 'create'])->name('register');

Route::post('/register', [RegisterUserController::class, 'SendEmail'])->name('register');



Route::get('/send-email', function () {
    Mail::raw('This is a test email sent from Laravel using Mailtrap!', function ($message) {
        $message->to('gokilapethanachi29@gmail.com')
                ->subject('Test Email');
    });

    return 'Email Sent!';
});
