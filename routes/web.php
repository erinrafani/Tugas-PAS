<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\SopirController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\TestimoniController;

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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', function () {
     if (Auth::user()->type == 2) { // if the current role is Administrator
                    return redirect("admin");
                }else{
                    return redirect("user");

                }
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth',"admin"]],
    function (){

        Route::get('/', function () {
            return view('admin.index');
        });
        Route::group(['prefix' => 'content'],function (){
            Route::resource('admin', AdminController::class);
            Route::resource('mobil', MobilController::class);
            Route::resource('merek', MerekController::class);
            Route::resource('sopir', SopirController::class);
            });

});


Route::group(['prefix' => 'user', 'middleware' => ['auth',"member"]],
    function (){
        Route::get('/', [CustomerController::class, 'index']);
        // Route::get('/user/Customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('Customer');
        Route::resource('customer', CustomerController::class);
        Route::get('/', [BookingController::class, 'index']);
        // Route::get('/user/Booking', [App\Http\Controllers\BookingController::class, 'index'])->name('Booking');
        Route::resource('booking', BookingController::class);
        Route::get('/', [PembayaranController::class, 'index']);
        // Route::get('/user/Pembayaran', [App\Http\Controllers\PembayaranController::class, 'index'])->name('Pembayaran');
        Route::resource('pembayaran', PembayaranController::class);
        Route::get('/', [TestimoniController::class, 'index']);
        // Route::get('/user/Testimoni', [App\Http\Controllers\TestimoniController::class, 'index'])->name('Testimoni');
        Route::resource('testimoni', TestimoniController::class);
});
