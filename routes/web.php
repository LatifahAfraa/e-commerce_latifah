<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ListController;
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
// https:..../admin/home = prefix
// {{ route... }} == as
Route::middleware(["auth"])->group(function () {

    Route::get('/', function () {
        return view('pages.home');
    })->name("home");

    Route::get("/account", function() {
        return view("pages.account");
    })->name("account");

    // Route::get("/list_user", function() {
    //     return view("pages.user_list");
    // })->name("list_user");

    Route::get('list_user',[ListController::class, 'index'])->name('list_user');
});

Auth::routes();
Route::get("logout", [LoginController::class, "logout"])->name('logout.get');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
