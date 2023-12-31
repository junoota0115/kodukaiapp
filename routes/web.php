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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\MoneyController::class, 'index'])->name('index');
Route::get('/create', [App\Http\Controllers\MoneyController::class, 'showCreate'])->name('showCreate');
Route::post('/create', [App\Http\Controllers\MoneyController::class, 'exeCreate'])->name('exeCreate');
Route::get('/detail', [App\Http\Controllers\MoneyController::class, 'showDetail'])->name('showDetail');
Route::get('/data', [App\Http\Controllers\MoneyController::class, 'exeData'])->name('exeData');


Route::get('/dreamCreate', [App\Http\Controllers\dreamsController::class, 'dreamCreate'])->name('dreamCreate');
Route::post('/dreamCreate', [App\Http\Controllers\dreamsController::class, 'dreamUplode'])->name('dreamUplode');
Route::get('/dreamDetail', [App\Http\Controllers\dreamsController::class, 'dreamDetail'])->name('dreamDetail');
Route::post('/dreamDelete', [App\Http\Controllers\dreamsController::class, 'dreamDelete'])->name('dreamDelete');


