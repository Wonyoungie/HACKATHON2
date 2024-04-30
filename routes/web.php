<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\UserDataController;

Route::get('/', function () {
    return view('user/homepage');
});
Route::get('/homepage', function () {
    return view('user/homepage');
});

Route::get('/user/userprofile', function () {
    return view('user.userprofile');
})->name('userprofile');

Route::get('/home_logined', function () {
    return view('home_logined');
});

Route::get('/home_logined', function () {
    return view('user/home_logined');
});

Route::get('/sesi', [SessionController::class, 'index'])->name('login');
Route::post('/sesi', [SessionController::class, 'login']);

Route::get('/', [SessionController::class, 'HomePage'])->name('homepage');

Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('social.redirect');

Route::get('/auth/callback', function () {
    $user = Socialite::driver('google')->stateless()->user();

    // Cek apakah pengguna sudah ada dalam database
    $existingUser = User::where('email', $user->getEmail())->first();

    if ($existingUser) {
        // Jika pengguna sudah ada, lakukan login
        Auth::login($existingUser);
    } else {
        // Jika pengguna belum ada, simpan ke database
        $newUser = new User();
        $newUser->name = $user->getName();
        $newUser->email = $user->getEmail();
        $newUser->password = bcrypt(Str::random(16));

        $newUser->save();

        // Lakukan login
        Auth::login($newUser);
    }

    // Redirect pengguna ke halaman beranda atau ke halaman yang sesuai
    return redirect('/home_logined');
})->name('social.callback');

Route::get('/user/profile', function () {
    return view('user.profile');
});

Route::post('/user/profile', [UserDataController::class, 'postUserDataInsert'])->name('user_data.store');