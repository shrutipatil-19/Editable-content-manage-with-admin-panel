<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/submit-contact', [HomeController::class, 'submitContact'])->name('contact.submit');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'store'])->name('contact.store');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/event', [HomeController::class, 'event'])->name('event');
Route::get('/event/{id}', [HomeController::class, 'show'])->name('event.details');
Route::get('/personalevent/{id}', [HomeController::class, 'peronaleventshow'])->name('personalevent.details');
Route::get('/enquiry', [HomeController::class, 'enquiry'])->name('enquiry');
Route::post('/enquiry', [HomeController::class, 'enquiry_store'])->name('enquiry.store');


