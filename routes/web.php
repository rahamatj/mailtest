<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\HelloEmail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send', function () {

    Mail::to('rahamat.gub@gmail.com')->send(new HelloEmail());

    return 'Email Sent';
});
