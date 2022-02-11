<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployedController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FlashController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware(['auth']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/employed', [EmployedController::class, 'index'])->name('employed')->middleware('employed');
Route::get('/customer', [CustomerController::class, 'index'])->name('customer')->middleware('customer');

Route::get('/success', [FlashController::class, 'success'])->name('success');
Route::get('/error', [FlashController::class, 'error'])->name('error');
Route::get('/info', [FlashController::class, 'info'])->name('info');
Route::get('/warning', [FlashController::class, 'warning'])->name('warning');