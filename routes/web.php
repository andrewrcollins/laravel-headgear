<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

Route::get('/headgear', function () {
    return Socialite::driver('google')->redirect();
})->name('headgear.redirect');

Route::get('/headgear/callback', function () {
    $user = Socialite::driver('google')->user();

    // Store user in session
    Session::put('headgear_authenticated', true);
    Session::put('headgear_user', $user);

    return redirect('/');
})->name('headgear.callback');
