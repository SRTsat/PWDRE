<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login.blade.php', function () {
    return view('login');
});

Route::get('/register.blade.php', function () {
    return view('register');
});
Route::get('/home.blade.php', function () {
    return view('home');
});
Route::get('/profile.blade.php', function () {
    return view('profile');
});
Route::get('/index.blade.php', function () {
    return view('index');
});
Route::get('/lihat.blade.php', function () {
    return view('lihat');
});
Route::get('/aboutus.blade.php', function () {
    return view('aboutus');
});
Route::get('/index copy.blade.php', function () {
    return view('index copy');
});
Route::get('/register.blade.php', function () {
    return view('register');
});

route::get('/lihat copy.blade.php', function(){
    return view('lihat copy');
});


