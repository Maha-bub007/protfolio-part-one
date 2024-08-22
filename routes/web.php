<?php

use App\Http\Controllers\backend\adminController;
use App\Http\Controllers\backend\blogController as BackendBlogController;
use App\Http\Controllers\backend\ourTeamController;
use App\Http\Controllers\backend\productController;
use App\Http\Controllers\backend\Blogcontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\serviceController;
use App\Models\Service;
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


//product routes.....
Route::get('/admin/product/creat',[productController::class,'creatProduct']);
Route::post('/admin/product/store',[productController::class,'storeProduct']);
Route::get('/admin/product/list',[productController::class,'listProduct']);
Route::get('/admin/product/delete/{id}',[productController::class,'deleteProduct']);
Route::get('/admin/product/edit/{id}',[productController::class,'editProduct']);
Route::post('/admin/product/update/{id}',[productController::class,'updateProduct']);

//services list
Route::get('/admin/service/creat',[serviceController::class,'creatService']);
Route::post('/admin/service/store',[serviceController::class,'storeService']);
Route::get('/admin/service/list',[serviceController::class,'listService']);
Route::get('/admin/service/delete/{id}',[serviceController::class,'deleteService']);
Route::get('/admin/service/edit/{id}',[serviceController::class,'editService']);
Route::post('/admin/service/update/{id}',[serviceController::class,'updateService']);

//our team list
Route::get('/admin/team/creat',[ourTeamController::class,'creatteam']);
Route::post('/admin/team/store',[ourTeamController::class,'storeteam']);
Route::get('/admin/team/list',[ourTeamController::class,'listteame']);
Route::get('/admin/team/delete/{id}',[ourTeamController::class,'deleteteam']);
Route::get('/admin/team/edit/{id}',[ourTeamController::class,'editteam']);
Route::post('/admin/team/update/{id}',[ourTeamController::class,'updateteam']);

//blog url 
Route::get('/admin/Blog/creat',[blogController::class,'creatBlog']);
Route::post('/admin/Blog/store',[blogController::class,'storeBlog']);
Route::get('/admin/Blog/list',[blogController::class,'listBlog']);
Route::get('/admin/Blog/delete/{id}',[blogController::class,'deleteBlog']);
Route::get('/admin/Blog/edit/{id}',[blogController::class,'editBlog']);
Route::post('/admin/Blog/update/{id}',[blogController::class,'updateBlog']);