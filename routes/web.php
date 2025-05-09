<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\productController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;


Route::view("/","login");

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

Route::get('/login', function(){
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

Route::view("/login","login");                                     //serves   resource/view/product.blade.php dirctly when the /login url is accessed
Route::post("/login", [UserController::class,'login']);           //Handles a POST request to /login or calls the login method from usercontroller
Route::get("/", [productController::class,'index']);              //Serves the homepage (/)using index method in productcontroller
Route::get("detail/{id}", [productController::class,'detail']);   //dynamic routing for product detail / loads the detail method of productController with specific product id.
Route::get("search", [productController::class,'search']);       //route handles a get request to /search and triggers the search method in the productController
Route::post("add_to_cart", [productController::class,'addToCart']);       //route handles a get request to /search and triggers the search method in the productController
