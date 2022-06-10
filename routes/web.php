<?php


use App\Http\Controllers\AdminPanel\AdminHouseController as AdminHouseController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController as AdminImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserHouseController;
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


//******************* HOME PAGES ROUTESS ********************
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/property', [HomeController::class, 'property'])->name('property');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');
Route::view('/loginuser' , 'home.login')->name('loginuser');
Route::view('/registeruser' , 'home.register')->name('registeruser');
Route::get('/logoutuser' ,[HomeController::class,'logout'])->name('logoutuser');

Route::view('/loginadmin' , 'admin.login')->name('loginadmin');
Route::post('/loginadmincheck' ,[HomeController::class,'loginadmincheck'])->name('loginadmincheck');


/*Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/house/{id}', [HomeController::class, 'house'])->name('house');
Route::get('/categoryhouse/{id}/{slug}', [HomeController::class, 'categoryhouse'])->name('categoryhouse');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



//******************* User aurh control ********************
Route::middleware('auth')->group(function (){

//******************* User Panel ROUTESS ********************
    Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/reviews', 'reviews')->name('reviews');
        Route::get('/reviewdestroy/{id}', 'reviewdestroy')->name('reviewdestroy');
        Route::prefix('houses')->group(function (){
            Route::get('/',[UserHouseController::class,'houses'])->name('houses');
            Route::get('create',[UserHouseController::class,'create'])->name('housesCreate');
            Route::post('store',[UserHouseController::class,'store'])->name('housesStore');
            Route::get('housesEdit/{id}',[UserHouseController::class,'housesEdit'])->name('housesEdit');
            Route::get('houseDestroy/{id}',[UserHouseController::class,'houseDestroy'])->name('houseDestroy');
            Route::get('houseImage/{id}',[UserHouseController::class,'houseImage'])->name('houseImage');

        });

    });


//******************* ADMIN PANEL ROUTESS ********************
Route::middleware('admin')->prefix('/admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');


    //******************* Geneal  ROUTESS ********************
    Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
    Route::post('/setting', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');



    //******************* ADMIN CATEGORY ROUTESS ********************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
    Route::get('/',  'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/destroy/{id}', 'destroy')->name('destroy');
    Route::get('/show/{id}', 'show')->name('show');
    });

    //******************* ADMIN HOME ROUTESS ********************
    Route::prefix('/house')->name('house.')->controller(AdminHouseController::class)->group(function () {
        Route::get('/',  'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });


    //******************* ADMIN House Images ROUTESS ********************
    Route::prefix('/image')->name('image.')->controller(AdminImageController::class)->group(function () {
        Route::get('/{hid}',  'index')->name('index');
        Route::post('/store/{hid}', 'store')->name('store');
        Route::get('/destroy/{hid}/{id}', 'destroy')->name('destroy');
    });

    //******************* ADMIN MESSAGE ROUTESS ********************
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/',  'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');

    });

    //******************* ADMIN faq ROUTESS ********************
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get('/',  'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });

    //******************* ADMIN COMMENT ROUTESS ********************
    Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function () {
        Route::get('/',  'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');

    });


    //******************* ADMIN User ROUTESS ********************
    Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
        Route::get('/',  'index')->name('index');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::post('/addrole/{id}', 'addrole')->name('addrole');
        Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');

    });
    });
});


