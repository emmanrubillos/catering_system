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

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->middleware('auth')->name('profile');
Route::get('/package', [App\Http\Controllers\PackageController::class, 'index'])->name('package');

Route::get('/reservation/buffet_order', [App\Http\Controllers\CustomerBuffetOrderController::class, 'index'])->name('buffet_order');
Route::get('/reservation/bill', [App\Http\Controllers\CustomerBillController::class, 'index'])->name('bill');
Route::get('/reservation/review', [App\Http\Controllers\CustomerReviewController::class, 'index'])->name('review');
Route::get('/reservation/event_details', [App\Http\Controllers\CustomerEventDetailsController::class, 'index'])->name('event_details');

Route::get('/admin_user', [App\Http\Controllers\AdminUserController::class, 'index'])->name('admin_user');
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users');


Route::middleware('CheckUserRole')->group(function (){

});
