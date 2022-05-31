<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;

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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// All the Crud Routes
// Route::resource('/blog', PostsController::class);
//All the route of the blog.
Route::resource('/main',PagesController::class);

//main index routes....
Route::get('index',[App\Http\Controllers\PagesController::class,'index']);


//Contact User Route.....
Route::get('/contact',[App\Http\Controllers\ContactController::class,'index']);
// Route::post('\contactinsert',[App\Http\Controllers\ContactController::class,'store']);
Route::resource('/contact',ContactController::class);


//Admin blog and user blog routes....
Route::get('/blog',[App\Http\Controllers\BlogController::class,'index']);
Route::get('/blogstore',[App\Http\Controllers\BlogController::class,'store'])->name('blog.store');
Route::get('/user1',[App\Http\Controllers\BlogController::class,'userblog']);
Route::get('/Userblogview',[App\Http\Controllers\BlogController::class,'view']);
Route::get('/Userblogview1',[App\Http\Controllers\BlogController::class,'view1']);
Route::get('/blog/{id}', [App\Http\Controllers\BlogController::class,'destroy'])->name('blog.delete');
Route::get('/blogedit/{id}', [App\Http\Controllers\BlogController::class,'edit'])->name('blog.edit');
Route::post('blogupdate/{id}',[App\Http\Controllers\BlogController::class,'update'])->name('blog.edit');
// Route::resource('/blog',BlogController::class);

//About Us all routes...
// Route::resource('/about',[App\Http\Controllers\AboutUsController::class,'index']);
// Route::resource('/about',[\App\Http\Controllers\AboutUsController::class,'index']);
Route::get('/about',[App\Http\Controllers\AboutUsController::class,'index']);
