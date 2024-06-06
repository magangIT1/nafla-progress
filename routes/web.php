<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('/show/finance', [DashboardController::class, 'showFinance'])->name('view.finance');
Route::get('/show/crypto', [DashboardController::class, 'showCrypto'])->name('view.crypto');
Route::get('/show/event', [DashboardController::class, 'showEvent'])->name('view.event');
Route::get('/show/helpdesk', [DashboardController::class, 'showHelpdesk'])->name('view.helpdesk');
Route::get('/show/sales', [DashboardController::class, 'showSales'])->name('view.sales');
Route::get('/show/product', [DashboardController::class, 'showProduct'])->name('view.product');
