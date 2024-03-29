<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController as ControllersCarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class,'index'])->name('goToHome');

Route::get('/login',[AuthController::class,'login'])->name('auth.login');
Route::post('/login',[AuthController::class,'doLogin']);
Route::delete('/logout',[AuthController::class,'logout'])->name('auth.logout');

Route::get('/adminLogin',[AdminAuthController::class,'login'])->name('auth.adminlogin');
Route::post('/adminLogin',[AdminAuthController::class,'doLogin']);
Route::delete('/adminLogout',[AdminAuthController::class,'logout'])->name('auth.adminlogout');

Route::get('/cars', [ControllersCarController::class,'index']);
Route::get('/cars/{slug}-{car}', [ControllersCarController::class,'show'])->name('car.show')->where([
    'slug'=>'[0-9a-z\-]+',
    'car'=>'[0-9]+'
]);

Route::prefix('admin')->name('admin.')->middleware(['auth:admin','verified'])->group(function(){
    Route::resource('car',CarController::class)->except('show');
    Route::resource('order',OrderController::class)->except('show');
});
