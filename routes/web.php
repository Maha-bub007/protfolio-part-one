<?php

use App\Http\Controllers\backend\adminController;
use App\Http\Controllers\homecontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[homecontroller::class,'index']);
Route::get('/shop',[homecontroller::class,'shop']);
Route::get('/aboutus',[homecontroller::class,'aboutus']);
Route::get('/services',[homecontroller::class,'services']);
Route::get('/blog',[homecontroller::class,'blog']);
Route::get('/contactus',[homecontroller::class,'contactus']);
Route::get('/cart',[homecontroller::class,'cart']);
Route::get('/checkout',[homecontroller::class,'checkout']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//backend routes
Route::get('/admin/login',[adminController::class,'login']);
Route::post('/admin/login',[adminController::class,'loginCheck']);
Route::get('/admin/dashbroad',[adminController::class,'dashbroad']);

