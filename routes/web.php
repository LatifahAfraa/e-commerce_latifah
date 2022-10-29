<?php

use Illuminate\Support\Facades\Route;

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
Route::middleware(["auth"])->as("admin.")->group(function () {

    Route::get('/', function () {
        return view('pages.home');
    })->name("home");

    Route::get("/account", function() {
        return view("pages.account");
    })->name("account");

    Route::get("/list_user", function() {
        return view("pages.user_list");
    })->name("list_user");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
