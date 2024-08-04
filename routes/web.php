<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopaController;
use App\Http\Controllers\ShopbController;
use App\Http\Controllers\ShopcController;
use App\Http\Controllers\gymbController;
use App\Http\Controllers\shopController;
use App\Http\Controllers\miniaController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\aboutusController;
use App\Http\Controllers\contactController;


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

Route::get("/gallery/{url}", [shopController::class,"eachp"])->name("gallery.url");


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::group(['prefix' => '/admin'], function(){
    Route::resource("/admin", AdminController::class);
    Route::resource("/product", ProductController::class);
    Route::resource("/users", usersController::class);
    Route::post("/deactusers/{user}", [usersController::class,"deactive"])->name("user.deactive");
    Route::post("/actusers/{user}", [usersController::class,"active"])->name("user.active");
});


    Route::get("/", [HomeController::class,"index"])->name("bulding.index");
    Route::resource("/gallery", shopController::class);
    Route::resource("/gallery2", shopaController::class);
    Route::resource("/gallery3", shopbController::class);
    Route::resource("/gallery4", shopcController::class);
    Route::resource("/gallery5", gymbController::class);
    Route::resource("/gallery6", miniaController::class);
    Route::resource("/item", itemController::class);
    Route::resource("/login", loginController::class);
    Route::resource("/register", registerController::class);
    Route::get("/contactus", [contactController::class,"index"])->name("contactus.index");
    // Route::get('/contactus', function () {
    //     return view('bulding/contact-us');
    // });
    // Route::get('/aboutus', function () {
    //     return view('bulding/about-us');
    // });


