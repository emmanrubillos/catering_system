<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController\UsersController;
use App\Http\Controllers\Admin\CustomerReservation\CustomerEventDetailsController;
use App\Http\Controllers\Admin\Services\ServiceController;
use App\Http\Controllers\Customer\MakeReservationController;

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

Route::get('/admin', [App\Http\Controllers\Admin\UserController\AdminController::class, 'index'])->name('admin');

Route::get('/profile', [App\Http\Controllers\Pages\HomeController::class, 'profile'])->middleware('auth')->name('profile');
// Route::get('/package', [App\Http\Controllers\PackageController::class, 'index'])->name('package');
// Route::get('/reservation/review', [App\Http\Controllers\Admin\CustomerReservation\CustomerReviewController::class, 'index'])->name('review');
// Route::get('/reservation/event_details', [CustomerEventDetailsController::class, 'index'])->name('event_details');
// Route::get('/reservation/event_details/create', [CustomerEventDetailsController::class, 'create'])->name('event_details.create');
// Route::get('/reservation/buffet_order', [App\Http\Controllers\Admin\CustomerReservation\CustomerBuffetOrderController::class, 'index'])->name('buffet_order');
// Route::get('/reservation/bill', [App\Http\Controllers\Admin\CustomerReservation\CustomerBillController::class, 'index'])->name('bill');
// Route::get('/service', [App\Http\Controllers\Admin\Services\ServiceController::class, 'index'])->name('service');
// Route::post('/service', [App\Http\Controllers\Admin\Services\ServiceController::class, 'store'])->name('services.store');

// Route::get('/inclusions', [App\Http\Controllers\InclusionController::class, 'index'])->name('inclusions');
Route::resource('users', \App\Http\Controllers\Admin\UserController\UsersController::class);
Route::resource('service', \App\Http\Controllers\Admin\Services\ServiceController::class);
Route::resource('inclusion', \App\Http\Controllers\InclusionController::class);
Route::resource('classification', \App\Http\Controllers\ClassificationController::class);

//! Make a Reservation
Route::get('/customer/make_reservation', [MakeReservationController::class, 'index'])->name('customer.make_reservation');


Route::middleware('CheckUserRole')->group(function (){

Route::get('/home', [App\Http\Controllers\Pages\HomeController::class, 'index'])->name('home');
Route::get('/about_us', [App\Http\Controllers\Pages\AboutController::class, 'index'])->name('about_us');
Route::get('/services', [App\Http\Controllers\Pages\ServicesController::class, 'index'])->name('services');
Route::get('/menu', [App\Http\Controllers\Pages\MenuController::class, 'index'])->name('menu');
Route::get('/contact_us', [App\Http\Controllers\Pages\ContactController::class, 'index'])->name('contact_us');
Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('profile');

});
