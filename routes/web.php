<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\CustomerEventDetailsController;
=======
>>>>>>> e48d05639c73d05266635701b65081c7176b5c09
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
 Route::get('/reservation/review', [App\Http\Controllers\CustomerReviewController::class, 'index'])->name('review');
Route::get('/reservation/event_details', [CustomerEventDetailsController::class, 'index'])->name('event_details');
Route::get('/reservation/event_details/create', [CustomerEventDetailsController::class, 'create'])->name('event_details.create');
Route::get('/reservation/buffet_order', [App\Http\Controllers\CustomerBuffetOrderController::class, 'index'])->name('buffet_order');
Route::get('/reservation/bill', [App\Http\Controllers\CustomerBillController::class, 'index'])->name('bill');



<<<<<<< HEAD

Route::resource('users', \App\Http\Controllers\UsersController::class);
=======
Route::resource('users', \App\Http\Controllers\UsersController::class);

>>>>>>> e48d05639c73d05266635701b65081c7176b5c09
Route::resource('packages', \App\Http\Controllers\PackageController::class);


Route::middleware('CheckUserRole')->group(function (){

Route::get('/about_us', [App\Http\Controllers\Customer\AboutController::class, 'index'])->name('about_us');
Route::get('/services', [App\Http\Controllers\Customer\ServicesController::class, 'index'])->name('services');
Route::get('/packages', [App\Http\Controllers\Customer\PackagesController::class, 'index'])->name('packages');
Route::get('/menu', [App\Http\Controllers\Customer\MenuController::class, 'index'])->name('menu');
Route::get('/contact_us', [App\Http\Controllers\Customer\ContactController::class, 'index'])->name('contact_us');


});
