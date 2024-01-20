<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\CarController as ControllersCarController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'index']);

Route::get('/cars', [ControllersCarController::class,'index']);
Route::get('/cars/{slug}-{car}', [ControllersCarController::class,'show'])->name('car.show')->where([
    'slug'=>'[0-9a-z\-]+',
    'car'=>'[0-9]+'
]);

Route::prefix('admin')->name('admin.')->group(function(){
    Route::resource('car',CarController::class)->except('show');
});
