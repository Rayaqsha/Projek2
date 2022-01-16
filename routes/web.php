<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BookingbasketController;
use App\Http\Controllers\BookingfootballController;
use App\Http\Controllers\BookingtennisController;
use App\Http\Controllers\BookinggolfController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CobaController;


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
    return view('welcome');
});

Route::middleware(['check'])->group(function() {
    Route::get('/bookingtennis', [BookingtennisController::class, 'index'])->name('bookingtennis');
Route::get('/bookingfootball', [BookingfootballController::class, 'index'])->name('bookingfootball.index');
Route::get('/bookingbasket', [BookingbasketController::class, 'index'])->name('bookingbasket');
Route::get('/bookinggolf', [BookinggolfController::class, 'index'])->name('bookinggolf');
Route::post('/bookingtennis', [BookingtennisController::class, 'store'])->name('bookingtennis');
// Route::post('/bookingfootball', [BookingfootballController::class, 'store'])->name('bookingfootball.store');
Route::post('/bookingfootball', [BookingfootballController::class, 'store'])->name('bookingfootball.store');
Route::post('/bookingbasket', [BookingbasketController::class, 'index'])->name('bookingbasket');
Route::post('/bookinggolf', [BookinggolfController::class, 'index'])->name('bookinggolf');
    // Route::get('/hello', [HelloController::class, 'index']);
    // Route::get('/todo', [TodoController::class, 'index'])->name('index');
    // Route::get('/todo/create', [TodoController::class, 'create'])->name('create');
    // Route::post('/todo', [TodoController::class, 'store'])->name('store');
    // Route::get('/todo/{id}', [TodoController::class, 'edit'])->name('edit');
    // Route::get('/todo/{id}/done', [TodoController::class, 'done'])->name('done');
    // Route::put('/todo/{id}', [TodoController::class, 'update'])->name('update');
    // Route::delete('/todo/{id}', [TodoController::class, 'destroy'])->name('destroy');    
});

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/logout', [LogoutController::class, 'index'])->name('logout');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/store', [StoreController::class, 'index'])->name('store');
Route::get('/news', [NewsController::class, 'index'])->name('news');



Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/coba', [CobaController::class, 'index'])->name('coba');
