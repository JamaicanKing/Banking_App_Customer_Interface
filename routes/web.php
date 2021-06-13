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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::middleware(['auth'])->group( function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('accounts',[App\Http\Controllers\AccountController::class,'index'])->name('accounts.index');
    Route::get('transactions',[App\Http\Controllers\TransactionController::class,'index'])->name('transactions.index');
    Route::get('transactions/{accountNumber}/create',[App\Http\Controllers\TransactionController::class,'create'])->name('transactions.create');
    Route::put('transactions',[App\Http\Controllers\TransactionController::class,'store'])->name('transactions.store');
    Route::get('accounts/{accountNumber}',[App\Http\Controllers\AccountController::class,'show'])->name('accounts.show');
});