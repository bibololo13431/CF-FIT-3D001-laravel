<?php

use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\PhoneBookController as AdminPhoneBookController;
use App\Http\Controllers\admin\ScheduleCatProController;
use App\Http\Controllers\Admin\TourController as AdminTourController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PhoneBookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TourController;
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





// Route::get('admin', function(){
//     return view('admin.layout.master');
// })->name('home');


Route::prefix('admin')->middleware('checkroleaccount')->name('admin.')->group(function(){
    //Schedule category
    Route::controller(ScheduleCatProController::class)->group(function(){
        Route::get('schedule_category',[ScheduleCatProController::class,'index'])->name('schedule_category');
        Route::get('schedule_category/create', 'create') -> name ('schedule_category.create');
        Route::post('schedule_category/store', 'store') -> name ('schedule_category.store');
        Route::get('schedule_category/detail/{id}','detail') -> name('schedule_category.detail');
        Route::post('schedule_category/update/{id}', 'update') -> name('schedule_category.update');
        Route::post('schedule_category/destroy/{id}','destroy') -> name('schedule_category.destroy');
        Route::post('schedule_category/restore/{id}','restore')->name('schedule_category.restore');
        Route::post('schedule_category/force_delete/{id}','forcedelete')->name('schedule_category.force.delete');
    });

    Route::resource('tour', AdminTourController::class);
    Route::post('tour-upload-image',[AdminTourController::class, 'uploadImage'])->name('tour.image.upload');
    Route::post('tour/restore/{id}',[AdminTourController::class, 'restore'])->name('tour.restore');
    Route::post('tour/force_delete/{id}',[AdminTourController::class,'forcedelete'])->name('tour.force.delete');
    Route::get('dashboard',[DashBoardController::class,'index'])->name('pages.dashboard');

    Route::resource('phonebook', AdminPhoneBookController::class );
    Route::post('phonebook/confirm/{id}', [AdminPhoneBookController::class,'confirm'])->name('phonebook.confirm');
    Route::post('phonebook/cancel/{id}', [AdminPhoneBookController::class,'cancel'])->name('phonebook.cancel');

});

Route::get('redirect-google', [GoogleController::class,'redirect'])->name('google.redirect');

Route::get('call-back-google', [GoogleController::class,'callback'])->name('google.call.back');

Route::get('test-sms', function(){
    $recceiverNumber ='+84988157742';
    $messeage = 'a';
    $client = new \Twilio\Rest\Client(env('TWILIO_ACCOUNT_SID'), env('TWILIO_AUTH_TOKEN'));
    $client -> messages->create(
        $recceiverNumber,
        [
            'from' => env('TWILIO_PHONE_NUMBER'),
            'body' => $messeage
        ]
    );
    return redirect()->route('home')->with('msg', 'Dat hang thanh cong');
})->name('sent.sms');

