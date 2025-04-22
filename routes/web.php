<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\ReController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Session;
use App\Http\Controllers\UploadImage;


Route::get('/', function () {
    return view('user');
})->name('user');

Route::get("/adopt",function(){
    return view('adopt');

});
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ApplyController;

Route::get('/hire', [ServiceController::class, 'show'])->name('services.hire');
Route::post('/hire', [ServiceController::class, 'book'])->name('services.book');

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'submit'])->name('register.submit');

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/apply', [ApplyController::class, 'show'])->name('apply.form');
Route::post('/apply', [ApplyController::class, 'submit'])->name('apply.submit');

// php artisan session:table
// php artisan migrate

