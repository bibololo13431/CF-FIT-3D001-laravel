<?php

use App\Http\Controllers\client\BookingSeatController;
use App\Http\Controllers\client\PlaceOrderController;
use App\Http\Controllers\client\SearchController;
use App\Http\Controllers\ProfileController;
use App\Http\Service\VNPAYService;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function (){
    return view('client.layout.master');
})->name('home');


// Route::get('home',function(){
//     return view('client.pages.home');
// });

Route::get('home',[SearchController::class, 'index'])->name('home');
Route::get('search',[SearchController::class, 'search'])->name('search');
Route::get('bookingseat/{id}',[BookingSeatController::class,'bookSeat'])->name('book.seat');
Route::post('placeseat',[BookingSeatController::class, 'placeSeat'])->name('book.place.seat');
Route::get('checkout', [BookingSeatController::class, 'checkout'])->name('book.checkout');
Route::post('placeorder',[PlaceOrderController::class,'placeOrder'])->name('book.place.order');
Route::get('call-back-vnpay', [VNPAYService::class,'callBackVNPay'])->name('call.back.vnpay');