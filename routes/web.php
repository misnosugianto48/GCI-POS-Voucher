<?php

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\VoucherController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(TransactionController::class)->group(function () {
    Route::get('/transaction', 'show');
    Route::post('/transaction', 'store');
    Route::get('/transactions-index', 'index');
    Route::get('/transactions/{id}/print', 'printInvoice');
});

Route::controller(VoucherController::class)->group(function () {
    Route::get('/vouchers', 'index');
    Route::get('/voucher-index', 'show');
    Route::post('/vouchers', 'store');
});
