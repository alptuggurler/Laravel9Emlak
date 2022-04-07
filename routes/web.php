<?php

use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
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


Route::get('/hello', function () {
    return 'Hello World';
});
//Get Controller Function
Route::get('/test/', [HomeController::class, 'test'])->name('test');

Route::get('/', [HomeController::class, 'index'])->name('index');
/*Route::get('/', function () {
    return view('welcome');
});
*/


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//******************* ADMIN PANEL ROUTESS ********************
Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin');


//******************* ADMIN CATEGORY ROUTESS ********************
Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin_category');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin_category_create');


//Hocaya sor post ile yapınca hata alıyorum.
Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('admin_category_store');
